<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DetailsBlogController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerchantController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('merchant', [MerchantController::class, 'merchant'])->name('merchant');
Route::get('driver', [DriverController::class, 'driver'])->name('driver');
Route::get('blog', [BlogController::class, 'blog'])->name('blog');
Route::get('blog/{slug}', [DetailsBlogController::class, 'details'])->name('details');
