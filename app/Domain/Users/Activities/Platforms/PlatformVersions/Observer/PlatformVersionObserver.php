<?php


namespace App\Domain\Users\Activities\Platforms\PlatformVersions\Observer;

use App\Domain\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion;
use Illuminate\Support\Facades\Auth;


class PlatformVersionObserver
{
	  /**
     * Handle the PlatformVersion "created" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion  $platformVersion
     * @return void
     */
    public function creating(PlatformVersion $platformVersion)
    {
        $platformVersion->created_by_user_id = Auth::id();
    }

    /**
     * Handle the PlatformVersion "updated" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion  $platformVersion
     * @return void
     */
    public function updating(PlatformVersion $platformVersion)
    {
        $platformVersion->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the PlatformVersion "deleted" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion  $platformVersion
     * @return void
     */
    public function deleting(PlatformVersion $platformVersion)
    {
        $platformVersion->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the PlatformVersion "restored" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion  $platformVersion
     * @return void
     */
    public function restored(PlatformVersion $platformVersion)
    {
        //
    }

    /**
     * Handle the PlatformVersion "force deleted" event.
     *
     * @param  \App\Domain\Users\Activities\Platforms\PlatformVersions\Model\PlatformVersion  $platformVersion
     * @return void
     */
    public function forceDeleted(PlatformVersion $platformVersion)
    {
        //
    }
}
