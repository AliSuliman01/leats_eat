<?php


namespace App\Http\ViewModels\Ingredients\IngredientImages;

use App\Domain\Ingredients\IngredientImages\Model\IngredientImage;
use Illuminate\Contracts\Support\Arrayable;


class GetIngredientImageVM implements Arrayable
{

    private $ingredient_image;

    public function __construct($ingredient_image)
    {
        $this->ingredient_image = $ingredient_image;
    }

    public function toArray()
    {
        return  $this->ingredient_image;
    }
}
