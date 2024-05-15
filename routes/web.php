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