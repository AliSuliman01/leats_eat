<?php


namespace App\Domain\Ingredients\IngredientCategories\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class IngredientCategoryDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $ingredient_id;
	/* @var integer|null */
	public $category_id;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'ingredient_id'				=> $request['ingredient_id'] ?? null ,
			'category_id'				=> $request['category_id'] ?? null ,

        ]);
    }
}
