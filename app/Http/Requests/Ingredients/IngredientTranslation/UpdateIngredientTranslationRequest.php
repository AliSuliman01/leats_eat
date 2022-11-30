<?php


namespace App\Http\Requests\Ingredients\IngredientTranslation;


use Illuminate\Foundation\Http\FormRequest;

class UpdateIngredientTranslationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'ingredient_id'				=> 'integer|required' ,
			'language_code'				=> 'string|required' ,
			'name'				=> 'string|required' ,
			'description'				=> 'string|nullable' ,
			'notes'				=> 'string|nullable' ,

        ];
    }
}
