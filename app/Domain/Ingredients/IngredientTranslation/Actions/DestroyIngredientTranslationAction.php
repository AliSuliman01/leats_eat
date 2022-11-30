<?php


namespace App\Domain\Ingredients\IngredientTranslation\Actions;


use App\Domain\Ingredients\IngredientTranslation\Model\IngredientTranslation;

class DestroyIngredientTranslationAction
{
    public static function execute(
        IngredientTranslation $ingredient_translation
    ){
        $ingredient_translation->delete();
        return $ingredient_translation;
    }
}
