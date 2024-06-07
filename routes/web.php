<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [BlogController::class, 'index'])->name('beranda');

Route::get('/tentang', function () {
    return view('tentang.about');
});
// Route::get('/artikel', function () {
//     return view('blog.index');
// });
// Route::get('/detail', function () {
//     return view('blog.detail');
// });

// HALAMAN BLOG
Route::get('/blog/artikel', [BlogController::class, 'blog'])->name('blog.blog');
Route::get('/blog/artikel/detail/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/artikel/kategori/{category}', [BlogController::class, 'showByCategory'])->name('blog.showByCategory');

// HALAMAN INFORMASI
Route::get('/blog/informasi', [InfoController::class, 'information'])->name('info.informasi');
Route::get('/blog/informasi/detail/{id}', [InfoController::class, 'show'])->name('info.show');
Route::get('/blog/informasi/label/{label}', [InfoController::class, 'showByLabel'])->name('info.showByLabel');

Route::get('/donasi', function () {
    return view('donate.donasi');
});
