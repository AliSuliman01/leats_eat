<?php


namespace App\Http\ViewModels\Ingredients\Ingredients;

use App\Domain\Ingredients\Ingredients\Model\Ingredient;
use Illuminate\Contracts\Support\Arrayable;

class GetAllIngredientsVM implements Arrayable
{
    public function toArray()
    {
        return Ingredient::query()->get();
    }
}
