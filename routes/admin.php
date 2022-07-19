<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('dashboard', function () {
        return 'Admin Dashboard';
    })->name('dashboard');

    Route::get('users', function () {
        return 'Admin users';
    })->name('users');

    Route::get('posts', function () {
        return 'Admin posts';
    })->name('posts');

    Route::get('comments', function () {
        return 'Admin comments';
    })->name('comments');

    Route::get('products', function () {
        return 'Admin products';
    })->name('products');

    Route::get('categories', function () {
        return 'Admin categories';
    })->name('categories');

    Route::get('statistics', function () {
        return 'Admin statistics';
    })->name('statistics');

    Route::get('orders', function () {
        return 'Admin orders';
    })->name('orders');
});
