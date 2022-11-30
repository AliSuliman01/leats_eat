<?php


namespace App\Http\Requests\Currencies\Currencies;


use Illuminate\Foundation\Http\FormRequest;

class UpdateCurrencyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required' ,
			'code'				=> 'required' ,
			'equivalent_to_main_currency'				=> 'required' ,
			'is_main'				=> 'nullable' ,

        ];
    }
}
