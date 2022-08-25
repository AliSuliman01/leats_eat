<?php


namespace App\Http\Controllers\Users\Activities\Platforms\Platforms;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Users\Activities\Platforms\Platforms\Actions\PlatformStoreAction;
use App\Domain\Users\Activities\Platforms\Platforms\Actions\PlatformDestroyAction;
use App\Domain\Users\Activities\Platforms\Platforms\Actions\PlatformUpdateAction;
use App\Domain\Users\Activities\Platforms\Platforms\DTO\PlatformDTO;
use App\Http\Requests\Users\Activities\Platforms\Platforms\PlatformStoreRequest;
use App\Http\Requests\Users\Activities\Platforms\Platforms\PlatformUpdateRequest;
use App\Http\Requests\Users\Activities\Platforms\Platforms\PlatformDestroyRequest;
use App\Http\Requests\Users\Activities\Platforms\Platforms\PlatformShowRequest;
use App\Http\ViewModels\Users\Activities\Platforms\Platforms\PlatformShowVM;
use App\Http\ViewModels\Users\Activities\Platforms\Platforms\PlatformIndexVM;

class PlatformController extends Controller
{

    public function index(){

        return response()->json(Response::success((new PlatformIndexVM())->toArray()));
    }

    public function show(PlatformShowRequest $request){

        return response()->json(Response::success((new PlatformShowVM(['id' => $request->route('id')]))->toArray()));
    }

    public function store(PlatformStoreRequest $request){
        $data = $request->validated() ;

        $platformDTO = PlatformDTO::fromRequest($data);

        $platform = PlatformStoreAction::execute($platformDTO);

        return response()->json(Response::success((new PlatformShowVM($platform->toArray()))->toArray()));
    }

    public function update(PlatformUpdateRequest $request){
        $data = $request->validated() ;

        $platformDTO = PlatformDTO::fromRequest($data);

        $platform = PlatformUpdateAction::execute($platformDTO);

        return response()->json(Response::success((new PlatformShowVM($platform->toArray()))->toArray()));
    }

    public function destroy(PlatformDestroyRequest $request){

        return response()->json(Response::success(PlatformDestroyAction::execute(PlatformDTO::fromRequest($request->validated()))));
    }

}
