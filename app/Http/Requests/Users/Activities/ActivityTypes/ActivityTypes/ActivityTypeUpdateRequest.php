<?php


namespace App\Http\Requests\Users\Activities\ActivityTypes\ActivityTypes;


use App\Http\Requests\ApiFormRequest;

class ActivityTypeUpdateRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:activity_types,id,deleted_at,NULL',
            'name' 					=> '' ,

        ];
    }
}
