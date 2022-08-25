<?php


namespace App\Domain\Users\Activities\ActivityTypes\ActivityTypes\Actions;


use App\Domain\Users\Activities\ActivityTypes\ActivityTypes\DTO\ActivityTypeDTO;
use App\Domain\Users\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;

class ActivityTypeStoreAction
{
    public static function execute(
        ActivityTypeDTO $activityTypeDTO
    ){

        $activityType = new ActivityType($activityTypeDTO->toArray());
        $activityType->save();
        return $activityType;
    }
}
