<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ingredients\IngredientImages\IngredientImageController;

Route::apiResource('ingredient_images',IngredientImageController::class);
