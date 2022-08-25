<?php


namespace App\Http\Controllers\Users\Activities\Browsers\BrowserVersions;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Users\Activities\Browsers\BrowserVersions\Actions\BrowserVersionStoreAction;
use App\Domain\Users\Activities\Browsers\BrowserVersions\Actions\BrowserVersionDestroyAction;
use App\Domain\Users\Activities\Browsers\BrowserVersions\Actions\BrowserVersionUpdateAction;
use App\Domain\Users\Activities\Browsers\BrowserVersions\DTO\BrowserVersionDTO;
use App\Http\Requests\Users\Activities\Browsers\BrowserVersions\BrowserVersionStoreRequest;
use App\Http\Requests\Users\Activities\Browsers\BrowserVersions\BrowserVersionUpdateRequest;
use App\Http\Requests\Users\Activities\Browsers\BrowserVersions\BrowserVersionDestroyRequest;
use App\Http\Requests\Users\Activities\Browsers\BrowserVersions\BrowserVersionShowRequest;
use App\Http\ViewModels\Users\Activities\Browsers\BrowserVersions\BrowserVersionShowVM;
use App\Http\ViewModels\Users\Activities\Browsers\BrowserVersions\BrowserVersionIndexVM;

class BrowserVersionController extends Controller
{

    public function index(){

        return response()->json(Response::success((new BrowserVersionIndexVM())->toArray()));
    }

    public function show(BrowserVersionShowRequest $request){

        return response()->json(Response::success((new BrowserVersionShowVM(['id' => $request->route('id')]))->toArray()));
    }

    public function store(BrowserVersionStoreRequest $request){
        $data = $request->validated() ;

        $browserVersionDTO = BrowserVersionDTO::fromRequest($data);

        $browserVersion = BrowserVersionStoreAction::execute($browserVersionDTO);

        return response()->json(Response::success((new BrowserVersionShowVM($browserVersion->toArray()))->toArray()));
    }

    public function update(BrowserVersionUpdateRequest $request){
        $data = $request->validated() ;

        $browserVersionDTO = BrowserVersionDTO::fromRequest($data);

        $browserVersion = BrowserVersionUpdateAction::execute($browserVersionDTO);

        return response()->json(Response::success((new BrowserVersionShowVM($browserVersion->toArray()))->toArray()));
    }

    public function destroy(BrowserVersionDestroyRequest $request){

        return response()->json(Response::success(BrowserVersionDestroyAction::execute(BrowserVersionDTO::fromRequest($request->validated()))));
    }

}
