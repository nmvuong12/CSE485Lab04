<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

// Danh sách mượn sách
Route::get('/borrows', [BorrowController::class, 'index'])->name('borrows.index');

// Cập nhật trạng thái trả sách
Route::patch('/borrows/{id}/return', [BorrowController::class, 'updateReturn'])->name('borrows.return');

// Lịch sử mượn trả của độc giả
Route::get('/borrows/history', [BorrowController::class, 'historyView'])->name('borrows.history');
Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('borrows', BorrowController::class);