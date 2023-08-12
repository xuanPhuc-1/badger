<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\ArticleController;
use App\Http\Controllers\API\V1\AuthorController;
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

//https://badger.test/api/v1/articles

Route::group(['prefix' => 'v1', 'middleware' => 'auth:sanctum'], function () {
    //Aritcles
    Route::apiResource('articles', ArticleController::class);
    //Authors
    Route::get('/authors/{user}', [AuthorController::class, 'show'])->name('authors');
});
