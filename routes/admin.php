<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('admin-login',function(){
    return view('admin.auth.login');
})->name('admin.login');

// admin route
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home')
->middleware('is_admin');