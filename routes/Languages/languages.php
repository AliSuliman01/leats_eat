<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Languages\LanguageController;

Route::apiResource('languages',LanguageController::class);
