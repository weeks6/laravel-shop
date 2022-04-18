<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (Request $request) {
    $order = $request->query('order');
    if ($order) {
        if ($order == 'price') {
            $products = Product::orderBy('price_ru', 'desc')->get();
        } elseif ($order == 'price:asc') {
            $products = Product::orderBy('price_ru', 'asc')->get();
        }
    } else {
        $products = Product::all();
    }


    return view('home', ['products' => $products]);
})->name('home');

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', function (Request $request) {
    $request->session()->forget('register_message');
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/admin/categories', function () {
    $categories = Category::all();
    return view('admin/categories', ['categories' => $categories]);
})->name('admin_categories');

Route::post('/admin/categories', [CategoryController::class, 'create']);
Route::delete('/admin/categories', [CategoryController::class, 'delete']);

Route::post('/admin/products', [ProductController::class, 'create']);
Route::delete('/admin/products', [ProductController::class, 'delete']);

Route::get('/admin/products', function () {
    $countries = Country::all();
    $categories = Category::all();
    $products = Product::all();
    return view('admin/products', ['products' => $products, 'categories' => $categories, 'countries' => $countries]);
})->name('admin_products');

Route::get('/admin/orders', function () {
    return view('admin/orders');
})->name('admin_orders');

Route::get('/product/{product}', function ($commentId) {
    $product = Product::where('id', $commentId)->first();

    return view('product', ['product' => $product]);
});

Route::view('/about', 'about')->name('about');
