<?php


namespace App\Http\ViewModels\Users\Roles;

use App\Domain\Users\Roles\Model\Role;
use Illuminate\Contracts\Support\Arrayable;

class RoleIndexVM implements Arrayable
{

    public function get_roles(){
    	return Role::all();
	}
    public function toArray(): array
    {
        return $this->get_roles()->toArray();
    }
}
