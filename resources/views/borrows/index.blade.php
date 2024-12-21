<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Borrowed Books</h1>
        <a href="{{ route('borrows.create') }}" class="btn btn-primary mb-3">Add Borrow Record</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Number</th>
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
                        <td>
                            <a href="{{ route('readers.details', $borrow->reader->id) }}">{{ $borrow->reader->name }}</a>
                        </td>
                        <td>{{ $borrow->book->title }}</td>
                        <td>{{ $borrow->borrow_date }}</td>
                        <td>{{ $borrow->return_date ?? 'Not Returned' }}</td>
                        <td>{{ $borrow->status ? 'Returned' : 'Not Returned' }}</td>
                        <td>
                            @if (!$borrow->status)
                                <form action="{{ route('borrows.return', $borrow->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success btn-sm">Mark as Returned</button>
                                </form>
                            @else
                                <span class="text-muted">Returned</span>
                            @endif
                            <a href="{{ route('readers.history', $borrow->reader->id) }}" class="btn btn-info btn-sm">View History</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
