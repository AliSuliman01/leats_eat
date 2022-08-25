<?php


namespace App\Http\Requests\Users\Activities\ActivityLog;


use App\Http\Requests\ApiFormRequest;

class ActivityLogShowRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id'=> 'required|exists:user_activities,id,deleted_at,NULL',
        ];
    }
}
