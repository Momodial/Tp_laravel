<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{id}', [BookController::class, 'show']);

Route::post('/reviews/{book}', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');


