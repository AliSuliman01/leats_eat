<?php


namespace App\Http\Controllers\Users\Activities\Platforms\PlatformVersions;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Users\Activities\Platforms\PlatformVersions\Actions\PlatformVersionStoreAction;
use App\Domain\Users\Activities\Platforms\PlatformVersions\Actions\PlatformVersionDestroyAction;
use App\Domain\Users\Activities\Platforms\PlatformVersions\Actions\PlatformVersionUpdateAction;
use App\Domain\Users\Activities\Platforms\PlatformVersions\DTO\PlatformVersionDTO;
use App\Http\Requests\Users\Activities\Platforms\PlatformVersions\PlatformVersionStoreRequest;
use App\Http\Requests\Users\Activities\Platforms\PlatformVersions\PlatformVersionUpdateRequest;
use App\Http\Requests\Users\Activities\Platforms\PlatformVersions\PlatformVersionDestroyRequest;
use App\Http\Requests\Users\Activities\Platforms\PlatformVersions\PlatformVersionShowRequest;
use App\Http\ViewModels\Users\Activities\Platforms\PlatformVersions\PlatformVersionShowVM;
use App\Http\ViewModels\Users\Activities\Platforms\PlatformVersions\PlatformVersionIndexVM;

class PlatformVersionController extends Controller
{

    public function index(){

        return response()->json(Response::success((new PlatformVersionIndexVM())->toArray()));
    }

    public function show(PlatformVersionShowRequest $request){

        return response()->json(Response::success((new PlatformVersionShowVM(['id' => $request->route('id')]))->toArray()));
    }

    public function store(PlatformVersionStoreRequest $request){
        $data = $request->validated() ;

        $platformVersionDTO = PlatformVersionDTO::fromRequest($data);

        $platformVersion = PlatformVersionStoreAction::execute($platformVersionDTO);

        return response()->json(Response::success((new PlatformVersionShowVM($platformVersion->toArray()))->toArray()));
    }

    public function update(PlatformVersionUpdateRequest $request){
        $data = $request->validated() ;

        $platformVersionDTO = PlatformVersionDTO::fromRequest($data);

        $platformVersion = PlatformVersionUpdateAction::execute($platformVersionDTO);

        return response()->json(Response::success((new PlatformVersionShowVM($platformVersion->toArray()))->toArray()));
    }

    public function destroy(PlatformVersionDestroyRequest $request){

        return response()->json(Response::success(PlatformVersionDestroyAction::execute(PlatformVersionDTO::fromRequest($request->validated()))));
    }

}
