<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;

class BorrowController extends Controller
{
    /**
     * Hiển thị danh sách mượn sách.
     */
    public function index()
    {
    $borrows = Borrow::with(['reader', 'book'])->orderBy('borrow_date', 'desc')->get();
    return view('borrows.index', compact('borrows'));
    }


    /**
     * Tạo bản ghi mới cho việc mượn sách.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after:borrow_date',
        ]);

        Borrow::create([
            'reader_id' => $request->reader_id,
            'book_id' => $request->book_id,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
            'status' => '1',
        ]);

        return redirect()->route("borrows.index")->with("success", "Borrow record created successfully.");
    }

    /**
     * Ghi nhận trả sách.
     */
    public function markAsReturned($id)
{
    $borrow = Borrow::findOrFail($id);

    if ($borrow->status === 'returned') {
        return redirect()->back()->with('error', 'This book has already been returned.');
    }

    $borrow->update([
        'status' => 'returned',
        'return_date' => now(),
    ]);

    return redirect()->back()->with('success', 'Book marked as returned successfully.');
}


    /**
     * Hiển thị lịch sử mượn trả của độc giả.
     */
    public function history(Request $request)
{
    $readerId = $request->get('reader_id');
    
    if (!$readerId) {
        return redirect()->route('borrows.index')->with('error', '');
    }

    $history = Borrow::with('book')
        ->where('reader_id', $readerId)
        ->orderBy('borrow_at', 'desc')
        ->get();

    return view('borrows.history', compact('history'));
}public function readerHistory($readerId)
{
    $reader = Reader::with(['borrows.book'])->findOrFail($readerId);
    return view('borrows.history', compact('reader'));
}


}
