<?php


namespace App\Domain\Users\Roles\Actions;


use App\Domain\Users\Roles\DTO\RoleDTO;
use App\Domain\Users\Roles\Model\Role;
use Illuminate\Support\Facades\Auth;

class RoleDestroyAction
{
    public static function execute(
        $role
    ){
        $role->delete();
        return $role;
    }
}
