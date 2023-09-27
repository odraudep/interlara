<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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

Route::view('/', 'pages.base.home')->name('base.home');
Route::view('/contact', 'pages.base.contact')->name('base.contact');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
