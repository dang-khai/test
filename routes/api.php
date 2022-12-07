<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\CateApiController;


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

// production routes
Route::get('/allProduct', [ProductApiController::class, 'index'])->name('apiShowAllproducts');
Route::get('product/{id}', [ProductApiController::class, 'show'])->name('showProduct');
Route::post('/addProduct', [ProductApiController::class, 'store'])->name('apiAddproducts');
Route::delete('/deleteProduct/{id}', [ProductApiController::class, 'destroy'])->name('apiDeleteProduct');

// category routes
Route::get('/allCategory', [CateApiController::class, 'index'])->name('apiShowAllCategories');
Route::post('/addCategory', [CateApiController::class, 'store'])->name('apiAddCategories');
Route::delete('/deleteCategory/{id}', [CateApiController::class, 'destroy'])->name('apiDeleteCategories');
