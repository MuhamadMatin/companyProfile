<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])
    ->name('index');

Route::middleware('auth')->group(function () {
    Route::prefix('manage')->name('manage.')->group(function () {
        Route::resource('/home', IndexController::class);
        // ->middleware('role_or_permission:view_any_user');
        Route::resource('/users', UserController::class);
        // ->middleware('role_or_permission:view_any_user');
        Route::resource('/articles', ArticleController::class);
        // ->middleware('role_or_permission:view_any_role');
        Route::resource('/products', ProductController::class);
        // ->middleware('role_or_permission:view_any_book');
    });
});

Route::get('/about', [IndexController::class, 'about'])
    ->name('about');

Route::get('/articles', [IndexController::class, 'indexArticle'])
    ->name('article.index');

Route::get('/articles/{article:slug}', [IndexController::class, 'showArticle'])
    ->name('article.show');

Route::get('/products', [IndexController::class, 'indexProduct'])
    ->name('product.index');

Route::get('/products/{product:slug}', [IndexController::class, 'showProduct'])
    ->name('product.show');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
