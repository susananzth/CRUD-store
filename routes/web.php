<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('store', [ProductController::class, 'store'])->name('store');
Route::resource('product', ProductController::class);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
});
Route::middleware(['auth:sanctum', 'verified'])->get('/home', [HomeController::class, 'index'])->name('home');
