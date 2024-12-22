<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reader Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Edit Reader Information</h2>
    <!-- Form chỉnh sửa thông tin độc giả -->
    <form id="editReaderForm">
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter full name" value="John Doe">
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" class="form-control" id="dob" value="1990-01-01">
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" value="123 Main St, City">
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" id="phone" placeholder="Enter phone number" value="123-456-7890">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
        </div>
    </form>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $('#editReaderForm').on('submit', function (e) {
            e.preventDefault(); // Ngừng gửi form mặc định

            // Lấy dữ liệu từ form
            var fullName = $('#fullName').val();
            var dob = $('#dob').val();
            var address = $('#address').val();
            var phone = $('#phone').val();

            // Xử lý chỉnh sửa dữ liệu (ví dụ: gửi AJAX đến server hoặc cập nhật giao diện)
            console.log("Updated Information:", {
                Name: fullName,
                dob: dob,
                address: address,
                phone: phone
            });

            // Thông báo cho người dùng đã lưu thông tin thành công
            alert("Bạn đã lưu thông tin thành công");
        });
    });
</script>
</body>
</html>
