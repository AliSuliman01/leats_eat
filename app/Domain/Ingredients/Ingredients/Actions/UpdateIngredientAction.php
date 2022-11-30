<?php

namespace App\Domain\Ingredients\Ingredients\Actions;

use App\Domain\Ingredients\Ingredients\DTO\IngredientDTO;
use App\Domain\Ingredients\Ingredients\Model\Ingredient;

class UpdateIngredientAction
{

    public static function execute(
        Ingredient $ingredient,IngredientDTO $ingredientDTO
    ){
        $ingredient->update(array_null_filter($ingredientDTO->toArray()));
        return $ingredient;
    }
}
