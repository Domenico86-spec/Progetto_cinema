<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', [ArticleController::class, 'index'])->name('homepage');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/show', [ArticleController::class, 'show'])->name('article.show');




