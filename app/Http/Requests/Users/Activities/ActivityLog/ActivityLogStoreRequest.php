<?php


namespace App\Http\Requests\Users\Activities\ActivityLog;


use App\Http\Requests\ApiFormRequest;

class ActivityLogStoreRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'user_id' 					=> '' ,
			'activity_type_id' 					=> '' ,
			'target_id' 					=> '' ,
			'target_table_name' 					=> '' ,

        ];
    }
}
