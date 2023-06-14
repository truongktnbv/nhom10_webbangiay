<?php

use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CartController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);

        #Menu
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
            Route::post('/search',[MenuController::class,'search']);
        });

        #Product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);
            Route::post('/search',[ProductController::class,'search']);
        });

        #Slider
        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']);
        });
        #blog
        Route::prefix('blogs')->group(function () {
            Route::get('add', [BlogController::class, 'create']);
            Route::post('add', [BlogController::class, 'store']);
            Route::get('list', [BlogController::class, 'index']);
            Route::get('edit/{blog}', [BlogController::class, 'show']);
            Route::post('edit/{blog}', [BlogController::class, 'update']);
            Route::DELETE('destroy', [BlogController::class, 'destroy']);
        });
        #Upload
        Route::post('upload/services', [\App\Http\Controllers\Admin\UploadController::class, 'store']);

        #Cart
        Route::get('orders', [CartController::class, 'index']);
        Route::post('/search', [CartController::class, 'search']);
        Route::get('orders/view/{order}', [CartController::class, 'show']);
        Route::DELETE('orders/destroy', [CartController::class, 'destroy']);
        #customer
        Route::get('customers', [CustomerController::class, 'index']);
        Route::get('edit/{cutosmer}', [CustomerController::class, 'show']);
        Route::post('edit/{customer}', [CustomerController::class, 'update']);
        Route::post('/customer/search', [CustomerController::class, 'search']);
        Route::DELETE('customer/destroy', [CustomerController::class, 'destroy']);
        #dashboard
        Route::get('dashboard', [DashboardController::class, 'index']);
    });
});
Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::get('/shop',[\App\Http\Controllers\ShopController::class,'index']);
Route::post('/search',[\App\Http\Controllers\ShopController::class,'search']);
Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index']);
Route::get('/blog',[\App\Http\Controllers\BlogController::class,'index']);
Route::get('/profile',[\App\Http\Controllers\profileController::class,'index']);
Route::post('/profile',[\App\Http\Controllers\profileController::class,'update']);
Route::get('/login',[\App\Http\Controllers\LoginController::class,'index']);
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::get('/sign',[\App\Http\Controllers\LoginController::class,'signup']);
Route::post('/sign', [\App\Http\Controllers\LoginController::class, 'store']);
Route::post('/services/load-product', [App\Http\Controllers\MainController::class, 'loadProduct']);
Route::post('/services/load-product1', [App\Http\Controllers\ShopController::class, 'loadProduct']);
Route::get('blog/{id}-{slug}.html', [\App\Http\Controllers\BlogController::class, 'blog']);
Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuController::class, 'index']);
Route::get('san-pham/{id}-{slug}.html', [App\Http\Controllers\ProductController::class, 'index']);

Route::post('add-cart', [App\Http\Controllers\CartController::class, 'index']);
Route::get('carts', [App\Http\Controllers\CartController::class, 'show']);
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'update']);
Route::get('carts/delete/{id}', [App\Http\Controllers\CartController::class, 'remove']);
Route::post('carts', [App\Http\Controllers\CartController::class, 'addCart']);
Route::post('/vnpay', [App\Http\Controllers\CartController::class, 'vnpay']);
