<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử người đọc</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Người đọcđọc {{ $reader->name }}</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Số thứ tự</th>
                    <th>Sách</th>
                    <th>Ngày mượn</th>
                    <th>Ngày trả</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach($borrows as $borrow)
                    <tr>
                        <td>{{ $borrow->id }}</td>
                        <td>{{ $borrow->book->title }}</td>
                        <td>{{ $borrow->borrow_date }}</td>
                        <td>{{ $borrow->return_date ?? 'Chưa trả' }}</td>
                        <td>{{ $borrow->status ? 'Đã trả' : 'Chưa trả' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <p>Tổng số sách đã mượn: {{ $totalBooks }}</p>
        <p>Số sách đã trả: {{ $returnedBooks }}</p>
        <p>Số sách chưa trả: {{ $notReturnedBooks }}</p>

        <a href="{{ route('borrows.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>
</body>
</html>
