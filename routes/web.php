<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
use app\Http\Controllers\PembayaranController;
use app\Http\Controllers\ProfileController;
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

Route::get('/article', function () {
    return view('layouts/article');
});

Route::get('/user', function () {
    return view('layouts/user');
});

Route::get('/pembayaran', function () {
    return view('layouts/pembayaran');
});

Route::get('/profile', function () {
    return view('layouts/profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';