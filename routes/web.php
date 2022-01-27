<?php

use Illuminate\Support\Facades\Route;

//index page routing
Route::get('/', function () {
    return 'Home page';
});
//Contact page routing

Route::get('/Contact', function () {
    return 'Contact page';
});
//About us page routing

Route::get('/About_us', function () {
    return 'About_us page';
});
