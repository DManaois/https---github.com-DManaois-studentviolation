<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/admin/login', 'AdminController@login')->name('admin.login');
