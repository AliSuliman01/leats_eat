<?php


namespace App\Domain\Ingredients\IngredientCategories\Actions;


use App\Domain\Ingredients\IngredientCategories\Model\IngredientCategory;

class DestroyIngredientCategoryAction
{
    public static function execute(
        IngredientCategory $ingredient_category
    ){
        $ingredient_category->delete();
        return $ingredient_category;
    }
}
