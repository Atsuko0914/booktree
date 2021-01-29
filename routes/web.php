<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// "/"のルーティング
Route::get('/', function () {
    return view('top');
});

Route::get('/layouts', function () {
    return view('layouts.app');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/admin/post', function () {
    return view('admin.post.index');
});

Route::get('/show', function () {
    return view('admin.comment.show');
});

Route::get('/book', function () {
    return view('book.index');
});

Route::get('/book/record', function () {
    return view('book.record');
});

