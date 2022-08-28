<?php

namespace App\Http\Requests\Users\Users;

use App\Http\Requests\ApiFormRequest;

class ChangePasswordRequest extends ApiFormRequest
{

    public function rules()
    {
        return [
            'email' => 'required|email|exists:users',
        ];
    }
}
