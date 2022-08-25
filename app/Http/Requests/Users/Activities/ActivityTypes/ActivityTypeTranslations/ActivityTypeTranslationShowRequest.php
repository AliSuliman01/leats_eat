<?php


namespace App\Http\Requests\Users\Activities\ActivityTypes\ActivityTypeTranslations;


use App\Http\Requests\ApiFormRequest;

class ActivityTypeTranslationShowRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id'=> 'required|exists:activity_type_translations,id,deleted_at,NULL',
        ];
    }
}
