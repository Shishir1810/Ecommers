<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\SubCategoryController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';



// Frontend view
Route::get('/', [WebsiteController::class, 'website']);
Route::get('/product-view/{id}', [WebsiteController::class, 'productview'])->name('product.details');
Route::get('/allproduct_cate/{id}', [WebsiteController::class, 'allproduct'])->name('product.cate');
Route::get('/allproduct_subcate/{id}', [WebsiteController::class, 'allproductsubcate'])->name('product.subcate');
Route::get('/allproduct_brand/{id}', [WebsiteController::class, 'allproductbrand'])->name('product.brand');
// All product route
Route::middleware('auth')->group(function () {
    Route::put('/index/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/index/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/index', [UserController::class, 'index'])->name('users.index');
    Route::get('/role', [UserController::class, 'role'])->name('roles.index');


    Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::get('/admin', [AdminController::class, 'home'])->name('home');


    //All category route

    Route::get('/products', [ProductController::class, 'product'])->name('product.list');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/{product}/view', [ProductController::class, 'view'])->name('product.view');
    Route::delete('/products/{product}/delete', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('product.update');

    //All category route

    Route::get('/categoris', [CategoriController::class, 'category'])->name('category.list');
    Route::get('/categoris/create', [CategoriController::class, 'create'])->name('category.create');
    Route::post('/categoris', [CategoriController::class, 'store'])->name('category.store');
    Route::get('/categoris/{categori}/edit', [CategoriController::class, 'edit'])->name('category.edit');
    Route::put('/categoris/{categori}/update', [CategoriController::class, 'update'])->name('category.update');
    Route::delete('/categoris/{categori}/delete', [CategoriController::class, 'destroy'])->name('category.destroy');

    // Sub category route
    Route::resource('sub_categories', SubCategoryController::class);

    // All size Route
    Route::resource('sizes', SizeController::class);

    //All Tag route
    Route::resource('tags', TagController::class);

    //All brand route
    Route::resource('brands', BrandController::class);

    //All color route
    Route::resource('colors', ColorController::class);
    //All color route
    Route::resource('abouts', AboutController::class);
});
