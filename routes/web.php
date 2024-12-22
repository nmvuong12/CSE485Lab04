<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReaderController;

Route::get('/readers', [ReaderController::class, 'index'])->name('readers.index');
Route::get('/readers/create', [ReaderController::class, 'create'])->name('readers.create');
Route::post('/readers', [ReaderController::class, 'store'])->name('readers.store');
Route::get('/readers/{id}/edit', [ReaderController::class, 'edit'])->name('readers.edit');
Route::put('/reader/{id}', [ReaderController::class, 'update'])->name('readers.update');
Route::delete('/reader/{id}', [ReaderController::class, 'destroy'])->name('readers.destroy');

use App\Http\Controllers\BookController;


Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::post('/data/store', [BookController::class, 'store'])->name('data.store');


Route::resource('books', BookController::class);


use App\Http\Controllers\AuthController;

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

