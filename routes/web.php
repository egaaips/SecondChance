<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/tentang', function () {
    return view('tentang.about');
});
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/donasi', function () {
    return view('donate.donasi');
});
