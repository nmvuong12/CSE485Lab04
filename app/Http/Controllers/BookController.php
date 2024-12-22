<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);  // Lấy tất cả sách từ cơ sở dữ liệu
        return view('books.index', compact('books'));  // Trả về view 'books.index' với danh sách sách
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'category' => 'nullable|max:100',
            'year' => 'nullable|integer',
            'quantity' => 'nullable|integer',
        ]);
     // Lưu sách vào cơ sở dữ liệu
     Book::create($request->all());

     return redirect()->route('books.index')->with('success', 'Book created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);  // Tìm sách theo ID
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);  // Tìm sách theo ID
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'author' => 'required|max:255',
            'category' => 'nullable|max:100',
            'year' => 'nullable|integer',
            'quantity' => 'nullable|integer',
        ]);

        $book = Book::findOrFail($id);  // Tìm sách theo ID
        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);  // Tìm sách theo ID
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}