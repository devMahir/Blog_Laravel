<?php

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

Route::get('/', function () {
    return view('user.blog');
})->name('blog');

Route::get('post', function () {
    return view('user.post');
})->name('post');

Route::get('admin/home', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('admin/post', function () {
    return view('admin.post.post');
})->name('admin.post');

Route::get('admin/tag', function () {
    return view('admin.tag.tag');
})->name('admin.tag');

Route::get('admin/category', function () {
    return view('admin.category.category');
})->name('admin.category');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
