<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;

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
Route::get('/', [LoginController::class, 'getLogin']);

Route::post('/auth/login',[LoginController::class, 'postLogin']);


Route::get('/auth/register',[RegisterController::class, 'getRegister']);

Route::post('/auth/register',[RegisterController::class, 'postRegister']);

Route::get('/admin/post/index',[PostController::class, 'index']);

Route::post('/admin/post/index',[PostController::class, 'post']);

Route::get('/admin/post/index',[PostController::class, 'postShow']);

Route::get('/book/index', [BookController::class, 'index']
);

Route::get('/book/record', [BookController::class, 'record']
);

Route::post('/book/record', [BookController::class, 'postRecord']
);

Route::post('/book/confirm', [BookController::class, 'postConfirm']
);








Route::get('/layouts', function () {
    return view('layouts.app');
});

// Route::get('/admin/post', function () {
//     return view('admin.post.index');
// });




Route::get('/show', function () {
    return view('admin.comment.show');
});

// Route::get('/book', function () {
//     return view('book.index');
// });

// Route::get('/book/record', function () {
//     return view('book.record');
// });


