<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ingredients\IngredientCategories\IngredientCategoryController;

Route::apiResource('ingredient_category',IngredientCategoryController::class);
