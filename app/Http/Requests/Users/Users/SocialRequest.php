<?php

namespace App\Http\Requests\Users\Users;

use Illuminate\Foundation\Http\FormRequest;

class SocialRequest extends FormRequest
{

    public function rules()
    {
        return [
            'role_name' => 'required'
        ];
    }
}
