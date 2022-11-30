<?php


namespace App\Domain\Ingredients\IngredientImages\Actions;


use App\Domain\Ingredients\IngredientImages\Model\IngredientImage;

class DestroyIngredientImageAction
{
    public static function execute(
        IngredientImage $ingredient_image
    ){
        $ingredient_image->delete();
        return $ingredient_image;
    }
}
