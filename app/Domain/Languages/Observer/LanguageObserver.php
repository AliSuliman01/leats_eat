<?php


namespace App\Domain\Languages\Observer;

use App\Domain\Languages\Model\Language;
use Illuminate\Support\Facades\Auth;


class LanguageObserver
{
	  /**
     * Handle the Language "created" event.
     *
     * @param  \App\Domain\Languages\Model\Language  $language
     * @return void
     */
    public function creating(Language $language)
    {
        $language->created_by_user_id = Auth::id();
    }

    /**
     * Handle the Language "updated" event.
     *
     * @param  \App\Domain\Languages\Model\Language  $language
     * @return void
     */
    public function updating(Language $language)
    {
        $language->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the Language "deleted" event.
     *
     * @param  \App\Domain\Languages\Model\Language  $language
     * @return void
     */
    public function deleting(Language $language)
    {
        $language->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the Language "restored" event.
     *
     * @param  \App\Domain\Languages\Model\Language  $language
     * @return void
     */
    public function restored(Language $language)
    {
        //
    }

    /**
     * Handle the Language "force deleted" event.
     *
     * @param  \App\Domain\Languages\Model\Language  $language
     * @return void
     */
    public function forceDeleted(Language $language)
    {
        //
    }
}
