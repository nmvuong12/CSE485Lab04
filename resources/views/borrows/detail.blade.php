<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reader Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Reader Details</h1>
        <h2>{{ $reader->name }}</h2>
        <p>Email: {{ $reader->email }}</p>
        <p>Phone: {{ $reader->phone }}</p>

        <h3>Borrow History</h3>
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
                    <p>Total Books Borrowed: {{ $totalBooks }}</p>
                    <p>Books Returned: {{ $returnedBooks }}</p>
                    <p>Books Not Returned: {{ $notReturnedBooks }}</p>
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

        <a href="{{ route('borrows.index') }}" class="btn btn-secondary">Back to Borrow List</a>
    </div>
</body>
</html>
