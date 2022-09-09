<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\ComentAdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ClientController::class, 'index']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::resource('article', ArticleController::class);
    Route::resource('user', UserController::class);
    Route::get('dashboard', [HomeController::class , 'index'] );
    Route::post('article/filter', [ArticleController::class, 'filter']);
    Route::resource('coment', ComentAdminController::class);
});


Route::get('login', [AuthController::class , 'showlogin'])->name('login');
Route::post('login', [AuthController::class , 'loginprocess']);
Route::get('logout', [AuthController::class , 'logout']);


// client

// Route::resource('comment', ComentController::class);
Route::post('article/{article}', [ComentController::class , 'store']);
Route::get('home', [ClientController::class, 'index']);
Route::get('article/{article}', [ClientController::class, 'show']);
