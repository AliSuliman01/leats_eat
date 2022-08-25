<?php


namespace App\Http\Requests\Users\Activities\ActivityLog;


use Illuminate\Foundation\Http\FormRequest;

class GetMostUsersInteractWithTableRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'table_name'=>'exists:user_activities,target_table_name,deleted_at,NULL'
        ];
    }
}
