<?php


namespace App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Observer;

use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation;
use Illuminate\Support\Facades\Auth;


class ActivityTypeTranslationObserver
{
	  /**
     * Handle the ActivityTypeTranslation "created" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation  $activityTypeTranslation
     * @return void
     */
    public function created(ActivityTypeTranslation $activityTypeTranslation)
    {
        $activityTypeTranslation->created_by_user_id = Auth::id();
    }

    /**
     * Handle the ActivityTypeTranslation "updated" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation  $activityTypeTranslation
     * @return void
     */
    public function updated(ActivityTypeTranslation $activityTypeTranslation)
    {
        $activityTypeTranslation->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the ActivityTypeTranslation "deleted" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation  $activityTypeTranslation
     * @return void
     */
    public function deleted(ActivityTypeTranslation $activityTypeTranslation)
    {
        $activityTypeTranslation->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the ActivityTypeTranslation "restored" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation  $activityTypeTranslation
     * @return void
     */
    public function restored(ActivityTypeTranslation $activityTypeTranslation)
    {
        //
    }

    /**
     * Handle the ActivityTypeTranslation "force deleted" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation  $activityTypeTranslation
     * @return void
     */
    public function forceDeleted(ActivityTypeTranslation $activityTypeTranslation)
    {
        //
    }
}
