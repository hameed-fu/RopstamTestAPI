<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/categories/all',[ App\Http\Controllers\CategoryController::class , 'indexAll']);


Route::get('/products/all',[ App\Http\Controllers\ProductController::class , 'indexAll'   ]);
Route::get('/products/indexOnly/{id}',[ App\Http\Controllers\ProductController::class , 'show'   ]);

Route::fallback(function () {
    return response()->json(['status' => false,'Error' => ['Route does not exist']],404);
});
