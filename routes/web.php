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
    return view('welcome');
});

Route::get('/home', function () {
    return view('ecommerce.home');
});

Route::get('/login', function () {
    return view('ecommerce.login');
});

Route::get('/register', function () {
    return view('ecommerce.register');
});

Route::get('/produk', function () {
    return view('ecommerce.produk');
});

Route::get('/produk1', function () {
    return view('ecommerce.produk1');
});

Route::get('/base', function () {
    return view('admin.base');
});

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('kategori', function () {
    return view('kategori');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});