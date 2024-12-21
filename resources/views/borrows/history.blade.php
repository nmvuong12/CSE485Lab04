<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reader History</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Borrow History for {{ $reader->name }}</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Book Title</th>
                    <th>Borrow Date</th>
                    <th>Return Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($borrows as $borrow)
                    <tr>
                        <td>{{ $borrow->id }}</td>
                        <td>{{ $borrow->book->title }}</td>
                        <td>{{ $borrow->borrow_date }}</td>
                        <td>{{ $borrow->return_date ?? 'Not Returned' }}</td>
                        <td>{{ $borrow->status ? 'Returned' : 'Not Returned' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Total Books Borrowed: {{ $totalBooks }}</p>
        <p>Books Returned: {{ $returnedBooks }}</p>
        <p>Books Not Returned: {{ $notReturnedBooks }}</p>

        <a href="{{ route('borrows.index') }}" class="btn btn-secondary">Back to Borrow List</a>
    </div>
</body>
</html>
