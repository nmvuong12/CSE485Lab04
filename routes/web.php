<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

// Route để hiển thị danh sách mượn sách
Route::get('/borrows', [BorrowController::class, 'index'])->name('borrows.index');

// Route để cập nhật trạng thái trả sách
Route::patch('/borrows/{id}/return', [BorrowController::class, 'markAsReturned'])->name('borrows.return');

// Route để xem lịch sử mượn sách của độc giả
Route::get('/readers/{readerId}/history', [BorrowController::class, 'readerHistory'])->name('readers.history');

// Route cho trang chủ hoặc trang gốc (có thể thay đổi tùy nhu cầu)
Route::get('/', function () {
    return view('layouts.app'); // Hoặc tên view phù hợp
});

// Chỉ sử dụng nếu cần các route CRUD đầy đủ cho Borrow
// Nếu bạn đã có các route cụ thể như trên, có thể bỏ qua dòng này
Route::resource('borrows', BorrowController::class)->except(['create', 'store', 'edit', 'update']);
