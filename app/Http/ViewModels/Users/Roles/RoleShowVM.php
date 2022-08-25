<?php


namespace App\Http\ViewModels\Users\Roles;

use App\Domain\Users\Roles\Model\Role;
use Illuminate\Contracts\Support\Arrayable;


class RoleShowVM implements Arrayable
{

    private $role;

    public function __construct($role)
    {
        if ($role instanceof Role)
            $this->role = $role;
        else
            $this->role = Role::query()->find($role);

    }

    public function toArray()
    {
        return $this->role;
    }
}
