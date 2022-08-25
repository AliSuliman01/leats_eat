<?php


namespace App\Http\ViewModels\Users\Activities\ActivityTypes\ActivityTypeTranslations;

use App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\Model\ActivityTypeTranslation;
use Illuminate\Contracts\Support\Arrayable;

class ActivityTypeTranslationIndexVM implements Arrayable
{

    public function get_activity_type_translations(){
    	return ActivityTypeTranslation::all();
	}
    public function toArray(): array
    {
        return [
            'activity_type_translations' => $this->get_activity_type_translations()
        ];
    }
}
