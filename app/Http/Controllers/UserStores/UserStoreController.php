<?php


namespace App\Http\Controllers\UserStores;


use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\UserStores\Model\UserStore;
use App\Domain\UserStores\Actions\StoreUserStoreAction;
use App\Domain\UserStores\Actions\DestroyUserStoreAction;
use App\Domain\UserStores\Actions\UpdateUserStoreAction;
use App\Domain\UserStores\DTO\UserStoreDTO;
use App\Http\Requests\UserStores\StoreUserStoreRequest;
use App\Http\Requests\UserStores\UpdateUserStoreRequest;
use App\Http\ViewModels\UserStores\GetUserStoreVM;
use App\Http\ViewModels\UserStores\GetAllUserStoresVM;

class UserStoreController extends Controller
{
    public function __construct(){
        $this->middleware('datatable_adapters')->only(['index']);
        $this->middleware('auth.rest')->only(['store','update','destroy']);
    }
    public function index(){

        return response()->json(Response::success((new GetAllUserStoresVM())->toArray()));
    }

    public function show(UserStore $userStore){

        return response()->json(Response::success((new GetUserStoreVM($userStore))->toArray()));
    }

    public function store(StoreUserStoreRequest $request){

        $data = $request->validated() ;

        $userStoreDTO = UserStoreDTO::fromRequest($data);

        $userStore = StoreUserStoreAction::execute($userStoreDTO);

        return response()->json(Response::success((new GetUserStoreVM($userStore))->toArray()));
    }

    public function update(UserStore $userStore, UpdateUserStoreRequest $request){

        $data = $request->validated() ;

        $userStoreDTO = UserStoreDTO::fromRequest($data);

        $userStore = UpdateUserStoreAction::execute($userStore, $userStoreDTO);

        return response()->json(Response::success((new GetUserStoreVM($userStore))->toArray()));
    }

    public function destroy(UserStore $userStore){

        return response()->json(Response::success(DestroyUserStoreAction::execute($userStore)));
    }

}
