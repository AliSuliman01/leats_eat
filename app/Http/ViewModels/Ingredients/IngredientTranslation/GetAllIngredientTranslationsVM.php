<?php


namespace App\Http\ViewModels\Ingredients\IngredientTranslation;

use App\Domain\Ingredients\IngredientTranslation\Model\IngredientTranslation;
use Illuminate\Contracts\Support\Arrayable;

class GetAllIngredientTranslationsVM implements Arrayable
{
    public function toArray()
    {
        return IngredientTranslation::query()->get();
    }
}
