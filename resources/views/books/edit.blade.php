<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <title>Cập nhật thông tin sách</title>
</head>
<body>

<h1 style="margin: 50px 50px">Cập nhật thông tin sách</h1>

<form action="{{ route('books.update', $book->id) }}" method="POST" style="margin: 50px 50px">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Tên sách</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $book->name }}" required>
    </div>

    <div class="form-group mt-3">
        <label for="author">Tác giả</label>
        <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
    </div>

    <div class="form-group mt-3">
        <label for="category">Thể Loại</label>
        <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
    </div>

    <div class="form-group mt-3">
        <label for="year">Năm xuất bản</label>
        <input type="number" class="form-control" id="year" name="year" value="{{ $book->year }}" required>
    </div>

    <div class="form-group mt-3">
        <label for="quantity">Số Lượng</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $book->price }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

</body>
</html>
