<?php


namespace App\Domain\Users\Activities\ActivityLog\Observer;

use App\Domain\Users\Activities\ActivityLog\Model\ActivityLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ActivityLogObserver
{
	  /**
     * Handle the ActivityLog "created" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityLog\Model\ActivityLog  $activityLog
     * @return void
     */
    public function created(ActivityLog $activityLog)
    {
//        if (DB::table(config('project_database.user_status_table')))
    }

    /**
     * Handle the ActivityLog "updated" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityLog\Model\ActivityLog  $activityLog
     * @return void
     */
    public function updated(ActivityLog $activityLog)
    {
        $activityLog->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the ActivityLog "deleted" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityLog\Model\ActivityLog  $activityLog
     * @return void
     */
    public function deleted(ActivityLog $activityLog)
    {
        $activityLog->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the ActivityLog "restored" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityLog\Model\ActivityLog  $activityLog
     * @return void
     */
    public function restored(ActivityLog $activityLog)
    {
        //
    }

    /**
     * Handle the ActivityLog "force deleted" event.
     *
     * @param  \App\Domain\Users\Activities\ActivityLog\Model\ActivityLog  $activityLog
     * @return void
     */
    public function forceDeleted(ActivityLog $activityLog)
    {
        //
    }
}
