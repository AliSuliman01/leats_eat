<?php


namespace App\Domain\Users\Activities\ActivityTypes\ActivityTypeTranslations\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class ActivityTypeTranslationDTO extends DataTransferObject
{
	/* @var integer|null */
    public $id;
    /* @var integer|null */
public $activity_type_id;
	/* @var integer|null */
public $translation_lang_id;
	/* @var string|null */
public $name;
	/* @var string|null */
public $description;


    public static function fromRequest($request)
    {
        return new self([
            'id'        =>  $request['id'] ?? null,
            'activity_type_id' 					=> $request['activity_type_id'] ?? null ,
			'translation_lang_id' 					=> $request['translation_lang_id'] ?? null ,
			'name' 					=> $request['name'] ?? null ,
			'description' 					=> $request['description'] ?? null ,

        ]);
    }
}
