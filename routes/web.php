<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\TawaranController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KenapaHarusController;
use App\Http\Controllers\Admin\MitraLandingController;
use App\Http\Controllers\Admin\SliderBannerController;
use App\Http\Controllers\Admin\VideoBantuanController;
use App\Http\Controllers\Admin\CategoryLayananController;

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

// Home
Route::get('/', [HomeController::class, 'index'])->name('index');

// Dashboard admin
Route::get('/admin', [DashboardController::class, 'Dashboard']);

// Admin Artikel
Route::get('/admin/artikel', [ArtikelController::class, 'Artikel']);
Route::get('/admin/artikel/edit', [ArtikelController::class, 'Edit']);
Route::get('/admin/artikel/create', [ArtikelController::class, 'Create']);


// Admin FAQ
Route::get('/admin/faq', [FaqController::class, 'FAQ']);
Route::get('/admin/faq/edit', [FaqController::class, 'Edit']);
Route::get('/admin/faq/create', [FaqController::class, 'Create']);



// Admin Landing Page

// Hero Section
Route::get('/admin/hero', [HeroController::class, 'Hero']);
Route::get('/admin/hero/edit', [HeroController::class, 'Edit']);

// About Section
Route::get('/admin/about', [AboutController::class, 'About']);
Route::get('/admin/about/edit', [AboutController::class, 'Edit']);

// Slider Banner Section
Route::get('/admin/slider', [SliderBannerController::class, 'Slider']);
Route::get('/admin/slider/edit', [SliderBannerController::class, 'Edit']);
Route::get('/admin/slider/create', [SliderBannerController::class, 'Create']);

// Kenapa Harus Section
Route::get('/admin/kenapa', [KenapaHarusController::class, 'Kenapa']);
Route::get('/admin/kenapa/edit', [KenapaHarusController::class, 'Edit']);

// Tawaran Section
Route::get('/admin/tawaran', [TawaranController::class, 'Tawaran']);
Route::get('/admin/tawaran/edit', [TawaranController::class, 'Edit']);

// Category Layanan Section
Route::get('/admin/category', [CategoryLayananController::class, 'Category']);
Route::get('/admin/category/edit', [CategoryLayananController::class, 'Edit']);

// Mitra Landing Section
Route::get('/admin/mitra_landing', [MitraLandingController::class, 'Mitra_Landing']);
Route::get('/admin/mitra_landing/edit', [MitraLandingController::class, 'Edit']);

// Video Bantuan Section 
Route::get('/admin/video_bantuan', [VideoBantuanController::class, 'Bantuan']);
Route::get('/admin/video_bantuan/edit', [VideoBantuanController::class, 'Edit']);
Route::get('/admin/video_bantuan/create', [VideoBantuanController::class, 'Create']);