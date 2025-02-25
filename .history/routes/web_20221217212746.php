<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController as HomeController_user;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Login\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('users.pages.home');
})->name('user_home'); // Trang home guests

//Route admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('admin_home'); //trang home admin

    //route product
    Route::prefix('product')->group(function () {
        Route::get('/', [ProductController::class, 'product'])->name('admin_product'); // trang product admin
        Route::post('/edit', [ProductController::class, 'edit_product'])->name('admin_edit'); // edit product admin
        Route::post('/addProduct', [ProductController::class, 'addProduct'])->name('admin_addProduct'); // add product admin
        Route::post('/deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('admin_deleteProduct'); // add product admin

        // route images
        Route::get('/image/{id}', [ProductController::class, 'image'])->name('admin_imgProduct'); // product image admin
        Route::post('/addImage/{id}', [ProductController::class, 'addImage'])->name('admin_addImage'); // add product image admin
        Route::post('/deleteImgs/{id}', [ProductController::class, 'deleteAllImage'])->name('admin_deleteImages'); // product image admin
        Route::post('/deleteImg/{id}', [ProductController::class, 'deleteImage'])->name('admin_deleteImage'); // product image admin
    });

    //route category
    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'category'])->name('admin_category'); // trang category admin
        Route::post('/edit', [CategoryController::class, 'editCategory'])->name('admin_editCategory'); // edit product admin
        Route::post('/addcategory', [CategoryController::class, 'addCategory'])->name('admin_addCategory'); // add product admin
        Route::post('/deletecategory/{id}', [CategoryController::class, 'deleteCategory'])->name('admin_deleteCategory'); // add product admin
    });

    Route::get('/users', [UserController::class, 'index'])->name('admin.users'); //trang users admin
    Route::post('/users', [UserController::class, 'add'])->name('admin.users.add'); // post user admin
    Route::post('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit'); // post user admin
    Route::post('/users/delete/{id}', [UserController::class, 'delete'])->name('admin.users.delete'); // delete user admin
    Route::get('/orders', [HomeController::class, 'orders'])->name('admin_orders'); //trang orders admin

    Route::post('/orders/id-{id}', [HomeController::class, 'update'])->name('admin.orders.update');
    Route::post('/orders/delete-{id}', [HomeController::class, 'delete'])->name('admin.orders.delete');
});
Route::post('/orders', [HomeController::class, 'postOrder'])->name('orders');
Auth::routes(['login' => false, 'register' => false, 'verify' => true]);

Route::get('/home', [HomeController_user::class, 'index'])->name('home'); //Trang home guests and users

Route::get('/product/{slug}/id-{id}', [HomeController::class, 'showProductDetails'])->name('product.details'); //Trang chi tiết sản phẩm

Route::get('/product', function () {
    return view('users.pages.product');
})->name('product'); // trang sản phẩm

Route::get('/test-verify', function () {
    return view('users.pages.login');
})->middleware('verified'); // test verify email

//route login và register
Route::get('/login', [LoginController::class, 'ShowFormLogin'])->name('get.login');
Route::post('/login', [LoginController::class, 'PostLogin'])->name('post.login');
Route::get('/register', [RegisterController::class, 'ShowFormRegister'])->name('get.register');
Route::post('/register', [RegisterController::class, 'PostRegister'])->name('post.register');
