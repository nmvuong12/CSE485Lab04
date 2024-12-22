<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReaderController;

Route::get('/readers', [ReaderController::class, 'index'])->name('readers.index');
Route::get('/readers/create', [ReaderController::class, 'create'])->name('readers.create');
Route::post('/readers/', [ReaderController::class, 'store'])->name('readers.store');
Route::get('/readers/{id}/edit', [ReaderController::class, 'edit'])->name('readers.edit');
Route::put('/reader/{id}', [ReaderController::class, 'update'])->name('readers.update');
Route::delete('/reader/{id}', [ReaderController::class, 'destroy'])->name('readers.destroy');

Route::get('/', function () {
    return view('welcome');
});

// Định nghĩa route resource cho ReaderController
Route::resource('Reader', ReaderController::class);
