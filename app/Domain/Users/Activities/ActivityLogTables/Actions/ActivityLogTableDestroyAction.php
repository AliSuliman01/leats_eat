<?php


namespace App\Domain\Users\Activities\ActivityLogTables\Actions;


use App\Domain\Users\Activities\ActivityLogTables\DTO\ActivityLogTableDTO;
use App\Domain\Users\Activities\ActivityLogTables\Model\ActivityLogTable;

class ActivityLogTableDestroyAction
{
    public static function execute(
        ActivityLogTableDTO   $logTableDTO
    ){

        $logTable = ActivityLogTable::find($logTableDTO->id);
        $logTable->delete();
        return $logTable;
    }
}
