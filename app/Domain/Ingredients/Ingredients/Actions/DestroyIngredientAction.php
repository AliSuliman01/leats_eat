<?php


namespace App\Domain\Ingredients\Ingredients\Actions;


use App\Domain\Ingredients\Ingredients\Model\Ingredient;

class DestroyIngredientAction
{
    public static function execute(
        Ingredient $ingredient
    ){
        $ingredient->delete();
        return $ingredient;
    }
}
