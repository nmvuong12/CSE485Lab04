<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $borrows = Borrow::with(['reader', 'book'])->get(); // Lấy thông tin độc giả và sách
        return view('borrows.index', compact('borrows'));
    }

    public function create()
    {
        $readers = Reader::all(); // Lấy tất cả độc giả
        $books = Book::all();     // Lấy tất cả sách
        return view('borrows.create', compact('readers', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:borrow_date',
            'status' => 'required|boolean',
        ]);

        Borrow::create($request->all());

        return redirect()->route('borrows.index')->with('success', 'Borrow record added successfully.');
    }

    public function markAsReturned($id)
    {
        $borrow = Borrow::findOrFail($id);
        $borrow->update(['status' => 1]);

        return redirect()->route('borrows.index')->with('success', 'Book marked as returned.');
    }

    public function readerHistory($readerId)
    {
        $reader = Reader::findOrFail($readerId);
        $history = Borrow::with('book')
            ->where('reader_id', $readerId)
            ->orderBy('borrow_date', 'desc')
            ->get();

        return view('borrows.history', compact('reader', 'history'));
    }

    public function readerDetails($readerId)
    {
        $reader = Reader::findOrFail($readerId); // Tìm thông tin độc giả
        $borrows = Borrow::with('book') // Lấy danh sách mượn của độc giả đó
            ->where('reader_id', $readerId)
            ->orderBy('borrow_date', 'desc')
            ->get();

        return view('readers.details', compact('reader', 'borrows'));
        $totalBooks = $borrows->count();
        $returnedBooks = $borrows->where('status', 1)->count();
        $notReturnedBooks = $totalBooks - $returnedBooks;

        return view('readers.details', compact('reader', 'borrows', 'totalBooks', 'returnedBooks', 'notReturnedBooks'));

    }
}
