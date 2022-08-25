<?php


namespace App\Http\Controllers\Users\Activities\Browsers\Browsers;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Users\Activities\Browsers\Browsers\Actions\BrowserStoreAction;
use App\Domain\Users\Activities\Browsers\Browsers\Actions\BrowserDestroyAction;
use App\Domain\Users\Activities\Browsers\Browsers\Actions\BrowserUpdateAction;
use App\Domain\Users\Activities\Browsers\Browsers\DTO\BrowserDTO;
use App\Http\Requests\Users\Activities\Browsers\Browsers\BrowserStoreRequest;
use App\Http\Requests\Users\Activities\Browsers\Browsers\BrowserUpdateRequest;
use App\Http\Requests\Users\Activities\Browsers\Browsers\BrowserDestroyRequest;
use App\Http\Requests\Users\Activities\Browsers\Browsers\BrowserShowRequest;
use App\Http\ViewModels\Users\Activities\Browsers\Browsers\BrowserShowVM;
use App\Http\ViewModels\Users\Activities\Browsers\Browsers\BrowserIndexVM;

class BrowserController extends Controller
{

    public function index(){

        return response()->json(Response::success((new BrowserIndexVM())->toArray()));
    }

    public function show(BrowserShowRequest $request){

        return response()->json(Response::success((new BrowserShowVM(['id' => $request->route('id')]))->toArray()));
    }

    public function store(BrowserStoreRequest $request){
        $data = $request->validated() ;

        $browserDTO = BrowserDTO::fromRequest($data);

        $browser = BrowserStoreAction::execute($browserDTO);

        return response()->json(Response::success((new BrowserShowVM($browser->toArray()))->toArray()));
    }

    public function update(BrowserUpdateRequest $request){
        $data = $request->validated() ;

        $browserDTO = BrowserDTO::fromRequest($data);

        $browser = BrowserUpdateAction::execute($browserDTO);

        return response()->json(Response::success((new BrowserShowVM($browser->toArray()))->toArray()));
    }

    public function destroy(BrowserDestroyRequest $request){

        return response()->json(Response::success(BrowserDestroyAction::execute(BrowserDTO::fromRequest($request->validated()))));
    }

}
