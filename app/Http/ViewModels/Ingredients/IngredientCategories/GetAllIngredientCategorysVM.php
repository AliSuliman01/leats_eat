<?php


namespace App\Http\ViewModels\Ingredients\IngredientCategories;

use App\Domain\Ingredients\IngredientCategories\Model\IngredientCategory;
use Illuminate\Contracts\Support\Arrayable;

class GetAllIngredientCategorysVM implements Arrayable
{
    public function toArray()
    {
        return IngredientCategory::query()->get();
    }
}
