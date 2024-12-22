<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin độc giả</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Chỉnh sửa thông tin độc giả</h2>
    <!-- Form chỉnh sửa thông tin độc giả -->
    <form id="editReaderForm">
        <div class="form-group">
            <label for="id">ID:</label>
            <input type="text" class="form-control" id="id" placeholder="Nhập ID" value="1" disabled>
        </div>

        <div class="form-group">
            <label for="fullName">Họ Tên:</label>
            <input type="text" class="form-control" id="fullName" placeholder="Nhập họ tên" value="Nguyễn Văn A">
        </div>

        <div class="form-group">
            <label for="birthday">Ngày Sinh:</label>
            <input type="date" class="form-control" id="birthday" value="1990-01-01">
        </div>

        <div class="form-group">
            <label for="phone">Số Điện Thoại:</label>
            <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại" value="123-456-7890">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Hủy bỏ</button>
        </div>
    </form>
</div>

<!-- jQuery và Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $('#editReaderForm').on('submit', function (e) {
            e.preventDefault(); // Ngừng gửi form mặc định

            // Lấy dữ liệu từ form
            var id = $('#id').val();
            var fullName = $('#fullName').val();
            var birthday = $('#birthday').val(); // Lấy ngày sinh từ "birthday"
            var phone = $('#phone').val();

            // Xử lý chỉnh sửa dữ liệu (ví dụ: gửi AJAX đến server hoặc cập nhật giao diện)
            console.log("Thông tin đã cập nhật:", {
                id: id,
                fullName: fullName,
                birthday: birthday,  // Sử dụng "birthday" thay vì "dob"
                phone: phone
            });

            // Thông báo cho người dùng đã lưu thông tin thành công
            alert("Thông tin độc giả đã được cập nhật thành công!");
        });
    });
</script>
</body>
</html>
