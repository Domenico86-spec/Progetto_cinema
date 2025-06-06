<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


Route::get('/', [ArticleController::class, 'index'])->name('homepage');
Route::get('/create', [ArticleController::class, 'create'])->name('create');
Route::post('/store', [ArticleController::class, 'store'])->name('store');





