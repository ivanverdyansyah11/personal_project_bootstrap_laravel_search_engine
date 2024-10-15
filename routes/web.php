<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::fallback(function () {
    return redirect()->back();
});

Route::resource('/blog', \App\Http\Controllers\BlogController::class);
Route::resource('/category', \App\Http\Controllers\CategoryBlogController::class);
Route::get('/', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('/category/{slug}', [\App\Http\Controllers\CategoryBlogController::class, 'show'])->name('category-blog.show');
