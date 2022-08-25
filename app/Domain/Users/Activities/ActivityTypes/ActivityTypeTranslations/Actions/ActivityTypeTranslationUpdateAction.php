<?php


namespace App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Actions;


use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\DTO\ActivityTypeTranslationDTO;
use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation;
use Illuminate\Support\Facades\Auth;

class ActivityTypeTranslationUpdateAction
{

    public static function execute(
        ActivityTypeTranslationDTO $activityTypeTranslationDTO
    ){
        $activityTypeTranslation = ActivityTypeTranslation::find($activityTypeTranslationDTO->id);
        $activityTypeTranslation->update(array_filter($activityTypeTranslationDTO->toArray()));
        $activityTypeTranslation->save();
        return $activityTypeTranslation;
    }
}
