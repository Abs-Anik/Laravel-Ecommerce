<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('admin-login',function(){
    return view('admin.auth.login');
})->name('admin.login');

// admin route

Route::group(['namespace'=>'App\Http\Controllers\Admin','middleware'=>'is_admin'],function(){
    //Admin Dashboard
    Route::get('/admin/home', 'AdminController@adminIndex')->name('admin.home');
    //Admin Logout
    Route::get('/admin/logout', 'AdminController@adminLogout')->name('admin.logout');
    
});