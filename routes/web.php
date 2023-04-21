<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Roles;
use App\Http\Controllers\LoginInfoController;



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

/* admin interface */
Route::prefix('/admin')->name('admin.')->middleware(['auth', 'admin'])->controller(App\Http\Controllers\ClientsController::class)->group(function () {
    //Client edit and delete
    Route::get('/', 'index')->name('index');
    Route::get('/clients', 'showClients')->name('clients');
    Route::get('/new', 'create')->name('create');
    Route::post('/new', 'store')->name('store');
    Route::get('clients/{client}/edit', 'edit')->name('edit');
    Route::put('clients/{client}','update')->name('update');
    Route::delete('/admin/clients/{id}', 'destroy')->name('destroy');

    //Client pass admin
    Route::get('/login_infos', [LoginInfoController::class, 'index'])->name('login_infos.index');
    Route::get('/login_infos/{id}/add', [LoginInfoController::class, 'create'])->name('login_infos.create');
    Route::post('/login_infos/{id}/add', [LoginInfoController::class, 'store'])->name('login_infos.store');
    Route::get('/{client}/login_infos/{login_info}', [LoginInfoController::class, 'edit'])->name('login_infos.edit');
    Route::put('/{client}/login_infos/{login_info}', [LoginInfoController::class, 'update'])->name('login_infos.update');
    Route::delete('/{client}/login_infos/{login_info}', [LoginInfoController::class, 'destroy'])->name('login_infos.destroy');
});



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



