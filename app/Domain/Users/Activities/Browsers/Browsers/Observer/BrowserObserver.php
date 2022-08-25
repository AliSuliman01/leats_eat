<?php


namespace App\Domain\Users\Activities\Browsers\Browsers\Observer;

use App\Domain\Users\Activities\Browsers\Browsers\Model\Browser;
use Illuminate\Support\Facades\Auth;


class BrowserObserver
{
	  /**
     * Handle the Browser "created" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\Browsers\Model\Browser  $browser
     * @return void
     */
    public function creating(Browser $browser)
    {
        $browser->created_by_user_id = Auth::id();
    }

    /**
     * Handle the Browser "updated" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\Browsers\Model\Browser  $browser
     * @return void
     */
    public function updating(Browser $browser)
    {
        $browser->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the Browser "deleted" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\Browsers\Model\Browser  $browser
     * @return void
     */
    public function deleting(Browser $browser)
    {
        $browser->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the Browser "restored" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\Browsers\Model\Browser  $browser
     * @return void
     */
    public function restored(Browser $browser)
    {
        //
    }

    /**
     * Handle the Browser "force deleted" event.
     *
     * @param  \App\Domain\Users\Activities\Browsers\Browsers\Model\Browser  $browser
     * @return void
     */
    public function forceDeleted(Browser $browser)
    {
        //
    }
}
