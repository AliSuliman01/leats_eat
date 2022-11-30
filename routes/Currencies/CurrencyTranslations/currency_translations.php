<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Currencies\CurrencyTranslations\CurrencyTranslationController;

Route::apiResource('currency_translations',CurrencyTranslationController::class);
