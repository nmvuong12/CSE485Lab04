@extends('layouts.app')

@section('content')
<h1>Borrowed Books</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Reader</th>
            <th>Book</th>
            <th>Borrow Date</th>
            <th>Return Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($borrows as $borrow)
        <tr>
            <td>{{ $borrow->id }}</td>
            <td>{{ $borrow->reader->name }}</td>
            <td>{{ $borrow->book->title }}</td>
            <td>{{ $borrow->borrow_date }}</td>
            <td>{{ $borrow->return_date ?? 'Not Returned' }}</td>
            <td>
                <span class="badge {{ $borrow->status === 'borrowed' ? 'bg-warning' : 'bg-success' }}">
                    {{ ucfirst($borrow->status) }}
                </span>
            </td>
            <td>
                @if($borrow->status === 'borrowed')
                <form action="{{ route('borrows.return', $borrow->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success btn-sm">Mark as Returned</button>
                </form>
                @else
                <span class="text-muted">Returned</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
