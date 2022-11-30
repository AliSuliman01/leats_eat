<?php


namespace App\Http\ViewModels\Ingredients\IngredientCategories;

use App\Domain\Ingredients\IngredientCategories\Model\IngredientCategory;
use Illuminate\Contracts\Support\Arrayable;


class GetIngredientCategoryVM implements Arrayable
{

    private $ingredient_category;

    public function __construct($ingredient_category)
    {
        $this->ingredient_category = $ingredient_category;
    }

    public function toArray()
    {
        return  $this->ingredient_category;
    }
}
