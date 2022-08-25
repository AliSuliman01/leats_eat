<?php


namespace App\Domain\Users\Activities\Platforms\Platforms\Observer;

use App\Domain\Users\Activities\Platforms\Platforms\Model\Platform;
use Illuminate\Support\Facades\Auth;


class PlatformObserver
{
	  /**
     * Handle the Platform "created" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\Platforms\Model\Platform  $platform
     * @return void
     */
    public function creating(Platform $platform)
    {
        $platform->created_by_user_id = Auth::id();
    }

    /**
     * Handle the Platform "updated" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\Platforms\Model\Platform  $platform
     * @return void
     */
    public function updating(Platform $platform)
    {
        $platform->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the Platform "deleted" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\Platforms\Model\Platform  $platform
     * @return void
     */
    public function deleting(Platform $platform)
    {
        $platform->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the Platform "restored" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\Platforms\Model\Platform  $platform
     * @return void
     */
    public function restored(Platform $platform)
    {
        //
    }

    /**
     * Handle the Platform "force deleted" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\Platforms\Model\Platform  $platform
     * @return void
     */
    public function forceDeleted(Platform $platform)
    {
        //
    }
}
