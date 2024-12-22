<!-- resources/views/books/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Thêm Sách Mới</title>
</head>
<body>

    <div class="container mt-5">
        <h1>Thêm Sách Mới</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf

            <!-- Tên sách -->
            <div class="mb-3">
                <label for="name" class="form-label">Tên sách</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <!-- Tác giả -->
            <div class="mb-3">
                <label for="author" class="form-label">Tác giả</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>

            <!-- Năm xuất bản -->
            <div class="mb-3">
                <label for="year" class="form-label">Năm xuất bản</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>

            <!-- Năm -->
            <div class="mb-3">
                <label for="quantity" class="form-label">Số Lượng</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

             <!-- Thể loại -->
             <div class="mb-3">
                <label for="catgory" class="form-label">Thể Loại</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <!-- Nút submit -->
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>

</body>
</html>
