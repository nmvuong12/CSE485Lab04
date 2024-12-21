@extends('layouts.app')

@section('content')
<h1>{{ $reader->name }}'s Borrowing History</h1>

@if($reader->borrows->isEmpty())
    <p>No borrowing history found.</p>
@else
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Book</th>
            <th>Borrow Date</th>
            <th>Return Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reader->borrows as $borrow)
        <tr>
            <td>{{ $borrow->id }}</td>
            <td>{{ $borrow->book->title }}</td>
            <td>{{ $borrow->borrow_date }}</td>
            <td>{{ $borrow->return_date ?? 'Not Returned' }}</td>
            <td>{{ ucfirst($borrow->status) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
