<?php

use App\Http\Controllers\HomeController;
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
    return view('home.index', [
        "name" => "Alfad Sabil Haq",
        "email" => "alfadsabilahq@gmail.com",
        "github" => "sunak27",
    ]);
});

Route::get('/about', function () {
    return "Halaman About";
});

Route::get('/blog', function () {
    return view('blog');
});
