<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('categories', 'App\Http\Controllers\CategoryController');

// Route::prefix('admin')->group(function (){
//     Route::apiResource('category',CategoryController::class);
// });

Route::group(['prefix' => 'admin','as' => 'admin.'], function () {
    Route::apiResource('category',CategoryController::class);
});
