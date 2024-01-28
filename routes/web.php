<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return 'login';
});

Route::post('/logout', function () {
    return 'logout';
});