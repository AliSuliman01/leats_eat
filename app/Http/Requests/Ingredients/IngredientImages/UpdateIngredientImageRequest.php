<?php


namespace App\Http\Requests\Ingredients\IngredientImages;


use Illuminate\Foundation\Http\FormRequest;

class UpdateIngredientImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'ingredient_id'				=> 'integer|required' ,
			'img_src'				=> 'string|required' ,

        ];
    }
}
