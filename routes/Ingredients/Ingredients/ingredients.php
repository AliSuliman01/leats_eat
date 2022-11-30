<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ingredients\Ingredients\IngredientController;

Route::apiResource('ingredients',IngredientController::class);
