<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('Admin.index');
})->name('Admin.index');

Route::get('/login', function () {
    return view('Admin/auth.index');
})->name('auth.index');

Route::resource('/categories', CategoryController::class);


Route::get('/products', function () {
    return view('Admin/products.index');
})->name('products.index');

Route::get('/blogs', function () {
    return view('Admin/blogs.index');
})->name('blogs.index');

Route::get('/wishlists', function () {
    return view('Admin/wishlists.index');
})->name('wishlists.index');
