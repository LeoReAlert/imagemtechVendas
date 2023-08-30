<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// List products
Route::get('products', [ProductController::class, 'index']);

// List single product
Route::get('product/{id}', [ProductController::class, 'show']);

// Create new product
Route::post('product', [ProductController::class, 'store']);

// Update product
Route::put('product/{id}', [ProductController::class, 'update']);

// Delete product
Route::delete('product/{id}', [ProductController::class,'destroy']);
