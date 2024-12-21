<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Hiển thị danh sách mượn trả.
     */
    public function index()
{
    $borrows = Borrow::with(['reader', 'book'])->paginate(10); // Phân trang 10 mục
    return view('borrows.index', ['borrows' => $borrows]);
}


    /**
     * Hiển thị form thêm lượt mượn.
     */
    public function create()
    {
        $readers = Reader::all(); // Lấy tất cả độc giả
        $books = Book::all();     // Lấy tất cả sách
        return view('borrows.create', compact('readers', 'books'));
    }

    /**
     * Lưu lượt mượn mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
{
    $request->validate([
        'reader_id' => 'required|exists:readers,id',
        'book_id' => 'required|exists:books,id',
        'borrow_date' => 'required|date',
        'return_date' => 'nullable|date|after_or_equal:borrow_date',
        'status' => 'required|boolean',
    ]);

    Borrow::create([
        'reader_id' => $request->reader_id,
        'book_id' => $request->book_id,
        'borrow_date' => $request->borrow_date,
        'return_date' => $request->return_date,
        'status' => $request->status == 'returned' ? 1 : 0, // Chuyển đổi 'returned' hoặc 'not returned'
    ]);

    return redirect()->route('borrows.index')->with('success', 'Borrow record added successfully.');
}


    /**
     * Hiển thị lịch sử mượn trả của một độc giả.
     */
    public function readerHistory($readerId)
    {
        $reader = Reader::findOrFail($readerId); // Tìm thông tin độc giả
        $borrows = Borrow::with('book') // Lấy danh sách mượn của độc giả đó
            ->where('reader_id', $readerId)
            ->orderBy('borrow_date', 'desc')
            ->get();

        $totalBooks = $borrows->count();
        $returnedBooks = $borrows->where('status', 1)->count();
        $notReturnedBooks = $totalBooks - $returnedBooks;

        return view('borrows.history', compact('reader', 'borrows', 'totalBooks', 'returnedBooks', 'notReturnedBooks'));
    }

}
