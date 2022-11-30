<?php


namespace App\Domain\Ingredients\Ingredients\Actions;


use App\Domain\Ingredients\Ingredients\DTO\IngredientDTO;
use App\Domain\Ingredients\Ingredients\Model\Ingredient;

class StoreIngredientAction
{
    public static function execute(
    IngredientDTO $ingredientDTO
    ){

        return Ingredient::create(array_null_filter($ingredientDTO->toArray()));
    }
}
