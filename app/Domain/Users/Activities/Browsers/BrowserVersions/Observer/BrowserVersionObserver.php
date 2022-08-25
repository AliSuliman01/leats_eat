<?php


namespace App\Domain\Users\Activities\Browsers\BrowserVersions\Observer;

use App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion;
use Illuminate\Support\Facades\Auth;


class BrowserVersionObserver
{
	  /**
     * Handle the BrowserVersion "created" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion  $browserVersion
     * @return void
     */
    public function creating(BrowserVersion $browserVersion)
    {
        $browserVersion->created_by_user_id = Auth::id();
    }

    /**
     * Handle the BrowserVersion "updated" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion  $browserVersion
     * @return void
     */
    public function updating(BrowserVersion $browserVersion)
    {
        $browserVersion->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the BrowserVersion "deleted" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion  $browserVersion
     * @return void
     */
    public function deleting(BrowserVersion $browserVersion)
    {
        $browserVersion->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the BrowserVersion "restored" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion  $browserVersion
     * @return void
     */
    public function restored(BrowserVersion $browserVersion)
    {
        //
    }

    /**
     * Handle the BrowserVersion "force deleted" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\BrowserVersions\Model\BrowserVersion  $browserVersion
     * @return void
     */
    public function forceDeleted(BrowserVersion $browserVersion)
    {
        //
    }
}
