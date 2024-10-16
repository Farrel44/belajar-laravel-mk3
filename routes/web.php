<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); //merujuk ke file index.blade.php di folder ../my-website/resources/views
});

Route::get('/welcome', function () {
    return view('welcome'); //merujuk ke file welcome.blade.php di folder ../my-website/resources/views
});

Route::get('/home', function () {
    return view('home'); //merujuk ke file home.blade.php di folder ../my-website/resources/views
});
