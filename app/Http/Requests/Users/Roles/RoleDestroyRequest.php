<?php


namespace App\Http\Requests\Users\Roles;


use App\Http\Requests\ApiFormRequest;

class RoleDestroyRequest extends ApiFormRequest
{
    public function rules(): array
    {
        return [
            'id' => 'required|exists:roles,id,deleted_at,NULL',
        ];
    }
}
