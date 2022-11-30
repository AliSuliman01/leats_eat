<?php


namespace App\Domain\Ingredients\IngredientTranslation\DTO;

use Spatie\DataTransferObject\DataTransferObject;


class IngredientTranslationDTO extends DataTransferObject
{

	/* @var integer|null */
	public $id;
	/* @var integer|null */
	public $ingredient_id;
	/* @var string|null */
	public $language_code;
	/* @var string|null */
	public $name;
	/* @var string|null */
	public $description;
	/* @var string|null */
	public $notes;


    public static function fromRequest($request)
    {
        return new self([
			'id'				=> $request['id'] ?? null ,
			'ingredient_id'				=> $request['ingredient_id'] ?? null ,
			'language_code'				=> $request['language_code'] ?? null ,
			'name'				=> $request['name'] ?? null ,
			'description'				=> $request['description'] ?? null ,
			'notes'				=> $request['notes'] ?? null ,

        ]);
    }
}
