<?php


namespace App\Domain\Ingredients\IngredientImages\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class IngredientImageDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $ingredient_id;
	/* @var string|null */
	public $img_src;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'ingredient_id'				=> $request['ingredient_id'] ?? null ,
			'img_src'				=> $request['img_src'] ?? null ,

        ]);
    }
}
