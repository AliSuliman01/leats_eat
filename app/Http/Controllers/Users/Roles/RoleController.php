<?php


namespace App\Http\Controllers\Users\Roles;


use App\Domain\Users\Roles\Model\Role;
use App\Helpers\Response;
use App\Http\Controllers\Controller;
use App\Domain\Users\Roles\Actions\RoleCreateAction;
use App\Domain\Users\Roles\Actions\RoleDestroyAction;
use App\Domain\Users\Roles\Actions\RoleUpdateAction;
use App\Domain\Users\Roles\DTO\RoleDTO;
use App\Http\Requests\Users\Roles\RoleCreateRequest;
use App\Http\Requests\Users\Roles\RoleUpdateRequest;
use App\Http\Requests\Users\Roles\RoleDestroyRequest;
use App\Http\Requests\Users\Roles\RoleShowRequest;
use App\Http\ViewModels\Users\Roles\RoleShowVM;
use App\Http\ViewModels\Users\Roles\RoleIndexVM;

class RoleController extends Controller
{

    public function index(){

        return response()->json(Response::success((new RoleIndexVM())->toArray()));
    }

    public function show(Role $role){

        return response()->json(Response::success((new RoleShowVM($role))->toArray()));
    }

    public function store(RoleCreateRequest $request){
        $data = $request->validated() ;

        $roleDTO = RoleDTO::fromRequest($data);

        $role = RoleCreateAction::execute($roleDTO);

        return response()->json(Response::success((new RoleShowVM($role->toArray()))->toArray()));
    }

    public function update(Role $role,RoleUpdateRequest $request){
        $data = $request->validated() ;

        $roleDTO = RoleDTO::fromRequest($data);

        $role = RoleUpdateAction::execute($roleDTO);

        return response()->json(Response::success((new RoleShowVM($role->toArray()))->toArray()));
    }

    public function destroy(Role $role){

        return response()->json(Response::success(RoleDestroyAction::execute($role)));
    }

}
