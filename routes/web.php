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