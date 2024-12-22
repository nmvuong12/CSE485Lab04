<?php

use App\Http\Controllers\BorrowController;

//route borrow
Route::get('/borrows', [BorrowController::class, 'index'])->name('borrows.index');
Route::get('/borrows/create', [BorrowController::class, 'create'])->name('borrows.create');
Route::post('/borrows', [BorrowController::class, 'store'])->name('borrows.store');
Route::patch('/borrows/{id}/return', [BorrowController::class, 'markAsReturned'])->name('borrows.return');
Route::get('/readers/{readerId}/history', [BorrowController::class, 'readerHistory'])->name('readers.history');


use App\Http\Controllers\ReaderController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;

// Routes cho Readers
Route::get('/readers', [ReaderController::class, 'index'])->name('readers.index');
Route::get('/readers/create', [ReaderController::class, 'create'])->name('readers.create');
Route::post('/readers', [ReaderController::class, 'store'])->name('readers.store');
Route::get('/readers/{id}/edit', [ReaderController::class, 'edit'])->name('readers.edit');
Route::put('/reader/{id}', [ReaderController::class, 'update'])->name('readers.update');
Route::delete('/reader/{id}', [ReaderController::class, 'destroy'])->name('readers.destroy');

// Routes cho Books
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::post('/data/store', [BookController::class, 'store'])->name('data.store');
Route::resource('books', BookController::class);

// Routes cho Auth
Route::get('/', function () {
    return view('auth.login');
})->name('showLogin');

Route::get('/home', function () {
    return view('welcome');
})->name('welcome');

Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.showRegister');
Route::post('/register', [AuthController::class, 'storeRegister'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
