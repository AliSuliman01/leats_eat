<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\Activities\Browsers\Browsers\BrowserController;

Route::group(['prefix' => 'browsers'],
	function () {
		Route::get('', [BrowserController::class,'index']);
		Route::get('show/{id}', [BrowserController::class,'show']);
		Route::group([
			'middleware' => ['auth:api']
		], function () {
			Route::post('create', [BrowserController::class,'create']);
			Route::post('update', [BrowserController::class,'update']);
			Route::post('destroy', [BrowserController::class,'destroy']);
		});
	});
