<?php


namespace App\Domain\Users\Activities\ActivityLogTables\Actions;


use App\Domain\Users\Activities\ActivityLogTables\DTO\ActivityLogTableDTO;
use App\Domain\Users\Activities\ActivityLogTables\Model\ActivityLogTable;

class ActivityLogTableUpdateAction
{

    public static function execute(
        ActivityLogTableDTO $logTableDTO
    ){
        $logTable = ActivityLogTable::find($logTableDTO->id);
        $logTable->update(array_filter($logTableDTO->toArray()));
        $logTable->save();
        return $logTable;
    }
}
