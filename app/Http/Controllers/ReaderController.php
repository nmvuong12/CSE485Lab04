<?php

namespace App\Http\Controllers;
use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers = Reader::paginate(10);
        return view('readers.index', compact('readers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('readers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Reader::create($request->all());

        return redirect()->route('readers.index')->with('success', 'Thêm độc giả thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reader = Reader::findOrFail($id);
        return view('readers.edit', compact('reader'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reader = Reader::findOrFail($id);
        return view('readers.edit', compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $reader = Reader::findOrFail($id);
        $reader->update($request->all());

        return redirect()->route('readers.index')->with('success', 'Cập nhật thông tin độc giả thành công!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reader = Reader::findOrFail($id);
        $reader->delete();

        return redirect()->route('readers.index')->with('success', 'Xóa độc giả thành công!');
    }

}
