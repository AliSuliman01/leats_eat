<?php


namespace App\Domain\Users\Roles\Actions;


use App\Domain\Users\Roles\DTO\RoleDTO;
use App\Domain\Users\Roles\Model\Role;
use Illuminate\Support\Facades\Auth;

class RoleCreateAction
{
    public static function execute(
        RoleDTO $roleDTO
    ){

        $role = new Role($roleDTO->toArray());
        $role->save();
        return $role;
    }
}
