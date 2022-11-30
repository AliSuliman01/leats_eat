<?php

namespace App\Domain\Ingredients\IngredientCategories\Actions;

use App\Domain\Ingredients\IngredientCategories\DTO\IngredientCategoryDTO;
use App\Domain\Ingredients\IngredientCategories\Model\IngredientCategory;

class UpdateIngredientCategoryAction
{

    public static function execute(
        IngredientCategory $ingredient_category,IngredientCategoryDTO $ingredient_categoryDTO
    ){
        $ingredient_category->update(array_null_filter($ingredient_categoryDTO->toArray()));
        return $ingredient_category;
    }
}
