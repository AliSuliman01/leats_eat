<?php


namespace App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Actions;


use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\DTO\ActivityTypeTranslationDTO;
use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation;

class ActivityTypeTranslationStoreAction
{
    public static function execute(
        ActivityTypeTranslationDTO $activityTypeTranslationDTO
    ){

        $activityTypeTranslation = new ActivityTypeTranslation($activityTypeTranslationDTO->toArray());
        $activityTypeTranslation->save();
        return $activityTypeTranslation;
    }
}
