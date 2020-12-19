<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreImageController;
use App\Http\Controllers\DisplayController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('store_image', [StoreImageController::class, 'index']);
Route::post('store_image/insert_image', [StoreImageController::class, 'insert_image']);
Route::get('store_image/fetch_image/{id}', [StoreImageController::class, 'fetch_image']);
Route::get('/displayUser', [StoreImageController::class, 'myReserve']);
Route::delete('deleteHotel', [StoreImageController::class, 'destroy']);
Route::put('updateHotel', [StoreImageController::class, 'update']);

Route::get('/displayAdmin', [StoreImageController::class, 'display']);
Route::delete('deleteHotel2', [StoreImageController::class, 'destroy2']);
Route::put('updateHotel2', [StoreImageController::class, 'update2']);


