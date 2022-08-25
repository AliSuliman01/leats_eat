<?php


namespace App\Domain\Users\Activities\ActivityLog\Actions;


use App\Domain\Users\Activities\ActivityLogTables\Actions\ActivityLogTableStoreAction;
use App\Domain\Users\Activities\ActivityLogTables\DTO\ActivityLogTableDTO;
use App\Domain\Users\Activities\ActivityLogTables\Model\ActivityLogTable;
use App\Domain\Users\Activities\ActivityLog\DTO\ActivityLogDTO;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ActivityLogStoreAction
{
    public static function execute(
        ActivityLogDTO $logDTO
    ){
        $activityLogTableName = config('our_database.activity_log_table_name');
        $activityLogTableCount = ActivityLogTable::count();
        $tableExist = Schema::hasTable($activityLogTableName.$activityLogTableCount);
        if($tableExist) $table = DB::table($activityLogTableName.$activityLogTableCount);
        if(!$tableExist || $table->count() >= config('our_database.activity_log_table_size')){
            $activityLogTableCount +=1 ;
            ActivityLogMigrationAction::execute($activityLogTableCount);
            ActivityLogTableStoreAction::execute(ActivityLogTableDTO::fromRequest([
                'table_name' => $activityLogTableName.$activityLogTableCount
            ]));
        }

        DB::table($activityLogTableName . $activityLogTableCount)->insert($logDTO->toArray());
    }
}
