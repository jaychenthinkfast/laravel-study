<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/first-route', function () {
    // 返回一个字符串
    return ['first' => '第一个路由']; 
});

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index']); 

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']); 

Route::get('/profile/detail/{id}', [\App\Http\Controllers\ProfileController::class, 'detail']); 

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index']);

Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store']); // 新增这个路由

// 登录页面路由
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index']);
// 登录处理路由
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store']);

Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout']);