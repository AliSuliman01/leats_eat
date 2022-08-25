<?php


namespace App\Http\Requests\Users\Activities\ActivityLogTables;


use App\Http\Requests\ApiFormRequest;

class ActivityLogTableShowRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id'=> 'required|exists:log_tables,id,deleted_at,NULL',
        ];
    }
}
