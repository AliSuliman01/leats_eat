<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PageController;

Route::apiResource('pages',PageController::class);
