<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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



Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::delete('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');


//Testing all funcitonality of laravel with blog creation
Route::prefix('/blog')->name('blog.')->controller(\App\Http\Controllers\PostController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/new', 'create')->name('create')->middleware('auth');;
    Route::post('/new', 'store')->name('store');
    Route::get('/{post}/edit', 'edit')->name('edit')->middleware('auth');
    Route::post('/{post}/edit', 'update')->name('update')->middleware('auth');;
    Route::get('/{slug}-{post}', 'show')->where([
        'post' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
    ])->name('show');
});



