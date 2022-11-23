<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
    return view('home');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class ,'handleGoogleCallback']);

// google login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class ,'handleFacebookCallback']);

Route::get('admin_blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::post('add',[App\Http\Controllers\BlogController::class, 'add']);

Route::get('blog_show', [App\Http\Controllers\BlogController::class, 'show']);

Route::get('delete/{id}',[App\Http\Controllers\BlogController::class, 'delete']);

Route::get('edit/{id}',[App\Http\Controllers\BlogController::class, 'edit']);
Route::post('update',[App\Http\Controllers\BlogController::class, 'update'])->name('update');





