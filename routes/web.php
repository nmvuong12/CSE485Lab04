<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\BookController;


Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::post('/data/store', [BookController::class, 'store'])->name('data.store');


Route::resource('books', BookController::class);

=======
use App\Http\Controllers\AuthController;
>>>>>>> origin/main
Route::get('/', function () {
    return view('auth.login');
})->name('showLogin');
Route::get('/home', function () {
    return view('welcome');
<<<<<<< HEAD
});
=======
})->name('welcome');
Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.showRegister');
Route::post('/register', [AuthController::class, 'storeRegister'])->name('auth.register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
>>>>>>> origin/main
