<?php

namespace App\Domain\Ingredients\IngredientImages\Actions;

use App\Domain\Ingredients\IngredientImages\DTO\IngredientImageDTO;
use App\Domain\Ingredients\IngredientImages\Model\IngredientImage;

class UpdateIngredientImageAction
{

    public static function execute(
        IngredientImage $ingredient_image,IngredientImageDTO $ingredient_imageDTO
    ){
        $ingredient_image->update(array_null_filter($ingredient_imageDTO->toArray()));
        return $ingredient_image;
    }
}
