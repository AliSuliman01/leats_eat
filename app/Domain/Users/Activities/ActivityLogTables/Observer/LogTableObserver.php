<?php


namespace App\Domain\Users\Activities\ActivityLogTables\Observer;

use App\Domain\LogTables\Model\ActivityLogTable;
use Illuminate\Support\Facades\Auth;


class LogTableObserver
{
	  /**
     * Handle the ActivityLogTable "created" event.
     *
     * @param  \App\Domain\LogTables\Model\ActivityLogTable  $logTable
     * @return void
     */
    public function creating(ActivityLogTable $logTable)
    {
        $logTable->created_by_user_id = Auth::id();
    }

    /**
     * Handle the ActivityLogTable "updated" event.
     *
     * @param  \App\Domain\LogTables\Model\ActivityLogTable  $logTable
     * @return void
     */
    public function updating(ActivityLogTable $logTable)
    {
        $logTable->updated_by_user_id = Auth::id();
    }

    /**
     * Handle the ActivityLogTable "deleted" event.
     *
     * @param  \App\Domain\LogTables\Model\ActivityLogTable  $logTable
     * @return void
     */
    public function deleting(ActivityLogTable $logTable)
    {
        $logTable->deleted_by_user_id = Auth::id();
    }

    /**
     * Handle the ActivityLogTable "restored" event.
     *
     * @param  \App\Domain\LogTables\Model\ActivityLogTable  $logTable
     * @return void
     */
    public function restored(ActivityLogTable $logTable)
    {
        //
    }

    /**
     * Handle the ActivityLogTable "force deleted" event.
     *
     * @param  \App\Domain\LogTables\Model\ActivityLogTable  $logTable
     * @return void
     */
    public function forceDeleted(ActivityLogTable $logTable)
    {
        //
    }
}
