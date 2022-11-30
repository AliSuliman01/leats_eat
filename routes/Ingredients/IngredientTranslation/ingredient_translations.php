<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ingredients\IngredientTranslation\IngredientTranslationController;

Route::apiResource('ingredient_translations',IngredientTranslationController::class);
