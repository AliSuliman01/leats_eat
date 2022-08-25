<?php


namespace App\Domain\Users\Activities\ActivityTypes\ActivityTypes\Actions;


use App\Domain\Users\Activities\ActivityTypes\ActivityTypes\DTO\ActivityTypeDTO;
use App\Domain\Users\Activities\ActivityTypes\ActivityTypes\Model\ActivityType;

class ActivityTypeDestroyAction
{
    public static function execute(
        ActivityTypeDTO   $activityTypeDTO
    ){

        $activityType = ActivityType::find($activityTypeDTO->id);
        $activityType->translations()->delete();
        $activityType->delete();
        return $activityType;
    }
}
