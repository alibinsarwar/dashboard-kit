<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;


Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function() {
    Route::get('/dashboard', [AdminController::class , 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class , 'profile'])->name('profile');
    Route::get('/charts', [AdminController::class , 'charts'])->name('charts');
    Route::post('/generalUpdate', [AdminController::class , 'generalUpdate'])->name('generalUpdate');
    Route::post('/passUpdate', [AdminController::class , 'passUpdate'])->name('passUpdate');

    Route::name('product.')->prefix('product')->group(function() {
        Route::get('list', [ProductController::class , 'list'])->name('list');
        Route::get('add', [ProductController::class , 'add'])->name('add');
    });
});
Route::name('user.')->prefix('user')->namespace('User')->group(function() {
    Route::get('/profile', [UserController::class , 'profile'])->name('profile');
});
