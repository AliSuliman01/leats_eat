<?php


namespace App\Http\Requests\Contents;


use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required' ,

        ];
    }
}
