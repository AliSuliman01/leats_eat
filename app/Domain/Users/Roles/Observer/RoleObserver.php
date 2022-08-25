<?php


namespace App\Domain\Users\Roles\Observer;

use App\Domain\Users\Roles\Model\Role;
use Illuminate\Support\Facades\Auth;


class RoleObserver
{
	  /**
     * Handle the Role "created" event.
     *
     * @param  \App\Domain\Users\Roles\Model\Role  $role
     * @return void
     */
    public function creating(Role $role)
    {
        $role->created_by_user_id = Auth::id();
    }

    /**
     * Handle the Role "updated" event.
     *
     * @param  \App\Domain\Users\Roles\Model\Role  $role
     * @return void
     */
    public function updating(Role $role)
    {
        $role->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the Role "deleted" event.
     *
     * @param  \App\Domain\Users\Roles\Model\Role  $role
     * @return void
     */
    public function deleting(Role $role)
    {
        $role->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the Role "restored" event.
     *
     * @param  \App\Domain\Users\Roles\Model\Role  $role
     * @return void
     */
    public function restored(Role $role)
    {
        //
    }

    /**
     * Handle the Role "force deleted" event.
     *
     * @param  \App\Domain\Users\Roles\Model\Role  $role
     * @return void
     */
    public function forceDeleted(Role $role)
    {
        //
    }
}
