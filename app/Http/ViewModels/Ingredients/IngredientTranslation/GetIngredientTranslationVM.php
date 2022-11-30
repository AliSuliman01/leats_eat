<?php


namespace App\Http\ViewModels\Ingredients\IngredientTranslation;

use App\Domain\Ingredients\IngredientTranslation\Model\IngredientTranslation;
use Illuminate\Contracts\Support\Arrayable;


class GetIngredientTranslationVM implements Arrayable
{

    private $ingredient_translation;

    public function __construct($ingredient_translation)
    {
        $this->ingredient_translation = $ingredient_translation;
    }

    public function toArray()
    {
        return  $this->ingredient_translation;
    }
}
