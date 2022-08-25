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

Route::get('/', function () {
    return view('index');
});
Route::get('home', function () {
    return redirect(\route('comments.create'));
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('edit', function () {
    return view('edit');
})->name('edit');

Route::get('about', function () {
    return view('about');
});
Route::post('subscribe', 'UserController@subscribe')->name('subscribe');
Route::get('menu', function () {
    return view('menu');
})->name('menu');
Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('blog detail', function () {
    return redirect(route('comments.index'));
});

Auth::routes();
Route::resource('comments',"CommentController");
