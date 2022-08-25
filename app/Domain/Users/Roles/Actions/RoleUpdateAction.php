<?php


namespace App\Domain\Users\Roles\Actions;


use App\Domain\Users\Roles\DTO\RoleDTO;
use App\Domain\Users\Roles\Model\Role;
use Illuminate\Support\Facades\Auth;

class RoleUpdateAction
{

    public static function execute(
        RoleDTO $roleDTO
    ){
        $role = Role::find($roleDTO->id);
        $role->update(array_filter($roleDTO->toArray()));
        $role->save();
        return $role;
    }
}
