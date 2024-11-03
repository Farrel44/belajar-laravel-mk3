<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('index'); //merujuk ke file index.blade.php di folder ../my-website/resources/views
});

Route::get('/welcome', function () {
    return view('welcome'); //merujuk ke file welcome.blade.php di folder ../my-website/resources/views
});

Route::get('/home', function () {
    return view('home'); //merujuk ke file home.blade.php di folder ../my-website/resources/views
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
