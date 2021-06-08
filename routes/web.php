<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;


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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/informasi', function () {
    return view('informasi');
});
Route::get('/informasi4', function () {
    return view('informasi4');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/informasi2', function () {
    return view('informasi2');
});

Route::get('/information3', function () {
    return view('information3');
});

Route::get('/mainhome', function () {
    return view('mainhome');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('register', [RegisterController::class, 'register']);

Route::get('/login', function () {
    return view('login');
});

Route::post('login', [AuthController::class, 'signin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/lupapassword', function () {
    return view('lupapassword');
});

Route::get('/realkereta', function () {
    return view('realkereta');
});

Route::get('/realspeed', function () {
    return view('realspeed');
});

Route::get('/testembed', function () {
    return view('testembed');
});

Route::get('/history', function () {
    return view('history');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/tambah', function () {
    return view('tambah');
});