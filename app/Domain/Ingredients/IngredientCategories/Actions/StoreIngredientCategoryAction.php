<?php


namespace App\Domain\Ingredients\IngredientCategories\Actions;


use App\Domain\Ingredients\IngredientCategories\DTO\IngredientCategoryDTO;
use App\Domain\Ingredients\IngredientCategories\Model\IngredientCategory;

class StoreIngredientCategoryAction
{
    public static function execute(
    IngredientCategoryDTO $ingredient_categoryDTO
    ){

        return IngredientCategory::create(array_null_filter($ingredient_categoryDTO->toArray()));
    }
}
