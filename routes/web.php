<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard/dashboard');
});

Route::get('/course', function () {
    return view('course/course');
});

Route::get('/all-course', function () {
    return view('course/allCourse');
});

Route::get('/start-course', function () {
    return view('course/startCourse');
});

Route::get('/checkout', function () {
    return view('checkout');
});