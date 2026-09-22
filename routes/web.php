<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    return 'Hello Student';
});

Route::get('/subjects', function () {
    return 'Hello Subject';
});