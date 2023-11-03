<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/class', function () {
    return view('class');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/contact', function () {
    return view('contact');
});
