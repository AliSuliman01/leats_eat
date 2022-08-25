<?php


namespace App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Actions;


use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\DTO\ActivityTypeTranslationDTO;
use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation;

class ActivityTypeTranslationDestroyAction
{
    public static function execute(
        ActivityTypeTranslationDTO   $activityTypeTranslationDTO
    ){

        $activityTypeTranslation = ActivityTypeTranslation::find($activityTypeTranslationDTO->id);
        $activityTypeTranslation->delete();
        return $activityTypeTranslation;
    }
}
