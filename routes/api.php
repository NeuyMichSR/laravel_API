<?php

use App\Http\Controllers\Api\Admin\BookController;
use App\Http\Controllers\Api\Admin\ContactController;
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
    Route::apiResource('contacts', ContactController::class);
    Route::get('books',[BookController::class,'getAllBooks'])->name('book.get.all');
    Route::get('books/{id}',[BookController::class,'getBook'])->name('book.get');
    Route::post('books',[BookController::class,'createBook'])->name('book.create');
    Route::put('books/{id}',[BookController::class,'updateBook'])->name('book.update');
    Route::delete('books/{id}',[BookController::class,'deleteBook'])->name('book.delete');
});
// Route::get('books', 'Api\Admin\BookController@getAllBooks');
// Route::get('books/{id}', 'Api\Admin\BookController@getBook');
// Route::post('books', 'Api\Admin\BookController@createBook');
// Route::put('books/{id}', 'Api\Admin\BookController@updateBook');
// Route::delete('books/{id}','Api\Admin\BookController@deleteBook');

