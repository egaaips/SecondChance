<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('tentang.about');
});
Route::get('/blog', function () {
    return view('blog.blog');
});
