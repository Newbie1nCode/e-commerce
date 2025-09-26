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
Route::get('auth/users/login_users', function () {
    return view('auth.users.login_users');
});
Route::get('auth/users/register_user', function () {
    return view('auth.users.register_user');
});
Route::get('users/detail_product', function () {
    return view('users.detail_product');
});