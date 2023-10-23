<?php
require "../connector.php";
require "../lib/mail_helper.php";
// Xử lý yêu cầu POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận email từ yêu cầu POST
    $email = $_POST["email"];

    // Truy vấn kiểm tra xem email có tồn tại trong cơ sở dữ liệu hay không
    $checkEmailQuery = "SELECT * FROM NguoiDung WHERE Email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // Tạo mật khẩu mới ngẫu nhiên
        $newPassword = substr(uniqid(rand(), true), 0, 8);

        // Cập nhật mật khẩu mới vào cơ sở dữ liệu
        $updatePasswordQuery = "UPDATE NguoiDung SET MatKhau = '$newPassword' WHERE Email = '$email'";
        if ($conn->query($updatePasswordQuery) === TRUE) {
            $rs = send_mail("Đặt lại mật khẩu thành công!", "Vui lòng sử dụng mật khẩu mới để đăng nhập: " . $newPassword, $email);
            if ($rs !== true) {
                echo $rs;
            }
            else {
                echo "Đặt lại mật khẩu thành công! Vui lòng kiểm tra email của bạn.";
            }

        } else {
            echo 'Lỗi cập nhật cơ sở dữ liệu: ' . $conn->error;
        }
    } else {
        echo 'Email không tồn tại!';
    }
} else {
    echo 'Phương thức yêu cầu không hợp lệ.';
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
