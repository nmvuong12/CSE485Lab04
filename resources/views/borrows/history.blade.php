@extends('layouts.app')

@section('content')
<h1 class="mb-4">Reader Borrow History</h1>

<form action="{{ route('borrows.history') }}" method="GET" class="mb-4">
    <div class="input-group">
        <input type="text" name="reader_id" class="form-control" placeholder="Enter Reader ID">
        <button class="btn btn-primary">Search</button>
    </div>
</form>

@if(isset($history))
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Book</th>
            <th>Borrowed At</th>
            <th>Due Date</th>
            <th>Returned At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($history as $borrow)
        <tr>
            <td>{{ $borrow->id }}</td>
            <td>{{ $borrow->book->status}}</td>
            <td>{{ $borrow->borrow_at }}</td>
            <td>{{ $borrow->return_at }}</td>
            <td>{{ $borrow->return_at ?? 'Not returned' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
