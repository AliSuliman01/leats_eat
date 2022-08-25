<?php


namespace App\Http\Requests\Users\Activities\ActivityLogTables;


use App\Http\Requests\ApiFormRequest;

class ActivityLogTableStoreRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'table_name' 					=> 'required|string' ,

        ];
    }
}
