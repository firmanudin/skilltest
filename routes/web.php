<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PelangganController;
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
    return view('welcome');
});

Route::get('category', [CategoryController::class, 'index']);

// Route Akses Admin
Route::get('register', [AdminController::class, 'register']);
Route::post('register', [AdminController::class, 'postRegister']);
Route::get('login', [AdminController::class, 'login']);
Route::post('login', [AdminController::class, 'postLogin']);
Route::get('logout', [AdminController::class, 'logout']);

// Route Menu Admin
Route::middleware('checkAdmin')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/', [AdminController::class, 'index']);

        Route::prefix('pelanggan')->group(function(){
            Route::get('/', [PelangganController::class, 'index']);
            Route::get('create', [PelangganController::class, 'create']);
            Route::post('create', [PelangganController::class, 'insert']);
            Route::get('edit/{id}', [PelangganController::class, 'edit']);
            Route::post('edit/{id}', [PelangganController::class, 'update']);
            Route::get('delete/{id}', [PelangganController::class, 'delete']);
        });

        Route::prefix('profile')->group(function(){
            Route::get('{id}', [AdminController::class, 'edit']);
            Route::post('{id}', [AdminController::class, 'update']);
        });
    });
});