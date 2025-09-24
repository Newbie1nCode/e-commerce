<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('users/home', function () {
    return view('users.home');
});
Route::get('auth/admin/login_admin', function () {
    return view('auth.admin.login_admin');
});