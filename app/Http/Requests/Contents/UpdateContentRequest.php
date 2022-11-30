<?php


namespace App\Http\Requests\Contents;


use Illuminate\Foundation\Http\FormRequest;

class UpdateContentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required' ,

        ];
    }
}
