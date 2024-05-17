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

Route::get('/login', function () {
    return view('login/login');
});

Route::get('/daftar', function () {
    return view('login/daftar');
});

Route::get('/akun', function () {
    return view('akun');
});