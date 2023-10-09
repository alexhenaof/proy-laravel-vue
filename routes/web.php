<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('post', PostController::class);
Route::resource('dashboard/category', CategoryController::class);
Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');
//Route::resource('photos', PhotoController::class)->only(['index', 'show']);
//Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);