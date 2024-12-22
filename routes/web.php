<?php

use App\Http\Controllers\BorrowController;

//route borrow
Route::get('/borrows', [BorrowController::class, 'index'])->name('borrows.index');
Route::get('/borrows/create', [BorrowController::class, 'create'])->name('borrows.create');
Route::post('/borrows', [BorrowController::class, 'store'])->name('borrows.store');
Route::patch('/borrows/{id}/return', [BorrowController::class, 'markAsReturned'])->name('borrows.return');
Route::get('/readers/{readerId}/history', [BorrowController::class, 'readerHistory'])->name('readers.history');


