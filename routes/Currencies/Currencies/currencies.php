<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Currencies\Currencies\CurrencyController;

Route::apiResource('currencies',CurrencyController::class);
