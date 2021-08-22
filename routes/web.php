<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\MainhomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;

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

Route::get('/', [MainhomeController::class, 'index'])->name('mainBlog');
Route::get('/post', [BlogController::class, 'index'])->name('post');




Route::get('admin/home', function () {
    return view('admin.home');
})->name('admin.home');


Route::group(['prefix' => 'admin'/* , 'middleware' => 'auth' */ ], function() {
    Route::resource('post', PostController::class);
    Route::resource('tag', TagController::class);
    Route::resource('category', CategoryController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
