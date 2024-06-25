<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', BookController::class);

Route::get('api/books', [BookController::class, 'getBooks'])->name('api.books.index');

Route::get('books-table', function() {
    return view('books.table');
})->name('books.table');
