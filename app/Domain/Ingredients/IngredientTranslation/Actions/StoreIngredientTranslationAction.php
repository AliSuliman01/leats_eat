<?php


namespace App\Domain\Ingredients\IngredientTranslation\Actions;


use App\Domain\Ingredients\IngredientTranslation\DTO\IngredientTranslationDTO;
use App\Domain\Ingredients\IngredientTranslation\Model\IngredientTranslation;

class StoreIngredientTranslationAction
{
    public static function execute(
    IngredientTranslationDTO $ingredient_translationDTO
    ){

        return IngredientTranslation::create(array_null_filter($ingredient_translationDTO->toArray()));
    }
}
