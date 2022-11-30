<?php


namespace App\Http\Requests\Currencies\CurrencyTranslations;


use Illuminate\Foundation\Http\FormRequest;

class UpdateCurrencyTranslationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'required' ,
			'language_code'				=> 'required' ,
			'currency_id'				=> 'required|exists:currencies,id,deleted_at,NULL' ,
			'name'				=> 'required|string' ,
			'description'				=> 'nullable|string' ,
			'notes'				=> 'nullable|string' ,

        ];
    }
}
