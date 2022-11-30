<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Languages\LanguageController;

Route::apiResource('language:language_code',LanguageController::class);
