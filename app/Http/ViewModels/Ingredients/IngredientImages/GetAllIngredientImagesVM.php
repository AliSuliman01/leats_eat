<?php


namespace App\Http\ViewModels\Ingredients\IngredientImages;

use App\Domain\Ingredients\IngredientImages\Model\IngredientImage;
use Illuminate\Contracts\Support\Arrayable;

class GetAllIngredientImagesVM implements Arrayable
{
    public function toArray()
    {
        return IngredientImage::query()->get();
    }
}
