<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index'])->name('home');

Route::get('/articles/{id}', [ArticleController::class, 'detail'])->name('detail-article');

Route::get('/category/{id}', [ArticleController::class, 'category'])->name('category');

Route::get('/writers', [WriterController::class, 'index'])->name('writers');

Route::get('/writers/{id}', [WriterController::class, 'detail'])->name('detail-writer');

Route::get('popular', [ArticleController::class, 'popular'])->name('popular');

Route::get('about-us', function(){
    $categories = Category::all();
    return view('about', compact('categories'));
})->name('about');
