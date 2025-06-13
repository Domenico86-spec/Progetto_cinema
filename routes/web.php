<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', [ArticleController::class, 'index'])->name('homepage');
Route::get('/article/create', [ArticleController::class, 'create'])->name('create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('store');





