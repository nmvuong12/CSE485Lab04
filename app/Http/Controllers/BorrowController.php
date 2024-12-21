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
        $borrows = Borrow::with('reader', 'book')->get(); // Load quan hệ Reader và Book
        return view("borrows.index", ["borrows" => $borrows]);
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
            'borrowed_at' => $request->borrow_date,
            'return_due_at' => $request->return_date,
            'status' => 'borrowed',
        ]);

        return redirect()->route("borrows.index")->with("success", "Borrow record created successfully.");
    }

    /**
     * Ghi nhận trả sách.
     */
    public function updateReturn(Request $request, $id)
    {
        $borrow = Borrow::findOrFail($id);

        if ($borrow->returned_at) {
            return redirect()->route("borrows.index")->with("error", "Book has already been returned.");
        }

        $borrow->update([
            'returned_at' => now(),
            'status' => 'returned',
        ]);

        return redirect()->route("borrows.index")->with("success", "Book return recorded successfully.");
    }

    /**
     * Hiển thị lịch sử mượn trả của độc giả.
     */
    public function history(Request $request)
    {
        $history = null;
        if ($request->has('reader_id')) {
            $history = Borrow::with('book')
                ->where('reader_id', $request->reader_id)
                ->get();
        }

        return view('borrows.history', compact('history'));
    }
}
