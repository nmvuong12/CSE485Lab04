<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Thêm Độc Giả</title>
</head>
<body>

<div class="container mt-5">
    <h1>Thêm Độc Giả</h1>
    <form action="#" method="POST">
        <!-- ID -->
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>

        <!-- Họ Tên -->
        <div class="mb-3">
            <label for="fullName" class="form-label">Họ Tên</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>

        <!-- Ngày Sinh -->
        <div class="mb-3">
            <label for="dob" class="form-label">Ngày Sinh</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>

        <!-- Địa Chỉ -->
        <div class="mb-3">
            <label for="address" class="form-label">Địa Chỉ</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <!-- Nút submit -->
        <button type="submit" class="btn btn-primary">Thêm Độc Giả</button>
    </form>
</div>

</body>
</html>
