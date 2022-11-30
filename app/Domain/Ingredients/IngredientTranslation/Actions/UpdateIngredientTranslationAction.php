<?php

namespace App\Domain\Ingredients\IngredientTranslation\Actions;

use App\Domain\Ingredients\IngredientTranslation\DTO\IngredientTranslationDTO;
use App\Domain\Ingredients\IngredientTranslation\Model\IngredientTranslation;

class UpdateIngredientTranslationAction
{

    public static function execute(
        IngredientTranslation $ingredient_translation,IngredientTranslationDTO $ingredient_translationDTO
    ){
        $ingredient_translation->update(array_null_filter($ingredient_translationDTO->toArray()));
        return $ingredient_translation;
    }
}
