<?php


namespace App\Http\Controllers\Contents;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Contents\Model\Content;
use App\Domain\Contents\Actions\StoreContentAction;
use App\Domain\Contents\Actions\DestroyContentAction;
use App\Domain\Contents\Actions\UpdateContentAction;
use App\Domain\Contents\DTO\ContentDTO;
use App\Http\Requests\Contents\StoreContentRequest;
use App\Http\Requests\Contents\UpdateContentRequest;
use App\Http\ViewModels\Contents\GetContentVM;
use App\Http\ViewModels\Contents\GetAllContentsVM;

class ContentController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllContentsVM())->toArray()));
    }

    public function show(Content $content){

        return response()->json(Response::success((new GetContentVM($content))->toArray()));
    }

    public function store(StoreContentRequest $request){

        $data = $request->validated() ;

        $contentDTO = ContentDTO::fromRequest($data);

        $content = StoreContentAction::execute($contentDTO);

        return response()->json(Response::success((new GetContentVM($content))->toArray()));
    }

    public function update(Content $content, UpdateContentRequest $request){

        $data = $request->validated() ;

        $contentDTO = ContentDTO::fromRequest($data);

        $content = UpdateContentAction::execute($content, $contentDTO);

        return response()->json(Response::success((new GetContentVM($content))->toArray()));
    }

    public function destroy(Content $content){

        return response()->json(Response::success(DestroyContentAction::execute($content)));
    }

}
