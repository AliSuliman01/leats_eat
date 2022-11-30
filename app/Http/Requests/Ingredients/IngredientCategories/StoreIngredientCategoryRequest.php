<?php


namespace App\Http\Requests\Ingredients\IngredientCategories;


use Illuminate\Foundation\Http\FormRequest;

class StoreIngredientCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
			'id'				=> 'integer|required' ,
			'ingredient_id'				=> 'integer|required' ,
			'category_id'				=> 'integer|required' ,

        ];
    }
}
