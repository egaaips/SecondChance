<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\DonasiController;


Route::get('/', [BlogController::class, 'index'])->name('beranda');

Route::get('/tentang', function () {
    return view('tentang.about');
});

// HALAMAN BLOG
Route::get('/blog/artikel', [BlogController::class, 'blog'])->name('blog.blog');
Route::get('/blog/artikel/detail/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/artikel/kategori/{category}', [BlogController::class, 'showByCategory'])->name('blog.showByCategory');
Route::get('/blog/artikel/search', [BlogController::class, 'blog'])->name('blog.search');

// HALAMAN INFORMASI
Route::get('/blog/informasi', [InfoController::class, 'information'])->name('info.informasi');
Route::get('/blog/informasi/detail/{id}', [InfoController::class, 'show'])->name('info.show');
Route::get('/blog/informasi/label/{label}', [InfoController::class, 'showByLabel'])->name('info.showByLabel');

// HALAMAN DONASI
Route::get('/donasi', function () {
    return view('donate.donasi');
});

Route::post('/simpan-donasi', [DonasiController::class, 'store'])->name('simpan-donasi');
