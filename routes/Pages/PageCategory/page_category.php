<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PageCategory\PageCategoryController;

Route::apiResource('page_category',PageCategoryController::class);
