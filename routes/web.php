<?php

use Illuminate\Support\Facades\Route;

//index page routing
Route::get('/', function () {
    return view('Home page');
});
//Contact page routing

Route::get('/Contact', function () {
    return view('Contact page');
});
//About us page routing

Route::get('/About_us', function () {
    return view('About_us page');
});
