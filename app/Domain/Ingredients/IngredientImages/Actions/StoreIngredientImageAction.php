<?php


namespace App\Domain\Ingredients\IngredientImages\Actions;


use App\Domain\Ingredients\IngredientImages\DTO\IngredientImageDTO;
use App\Domain\Ingredients\IngredientImages\Model\IngredientImage;

class StoreIngredientImageAction
{
    public static function execute(
    IngredientImageDTO $ingredient_imageDTO
    ){

        return IngredientImage::create(array_null_filter($ingredient_imageDTO->toArray()));
    }
}
