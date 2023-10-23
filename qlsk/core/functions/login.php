<?php
require "../connector.php";
require "../lib/mail_helper.php";

// Xử lý yêu cầu POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận email từ yêu cầu POST
    $email = $_POST["email"];
    $password = $_POST["password"];
    $type = $_GET["type"];

    $checkUserQuery = "SELECT * FROM NguoiDung WHERE Email = '$email' AND  MatKhau = '$password' AND VaiTro = '$type'";
    $result = $conn->query($checkUserQuery);

    if ($result->num_rows > 0) {

        $user_info = $result->fetch_assoc();

        if ($user_info['TrangThai'] == 1) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $user_info['MaNguoiDung'];
            $_SESSION['user_fullname'] = $user_info['Ho'] . ' ' .  $user_info['Ten'];
            $_SESSION['user_role'] = $user_info['VaiTro'];

            $resp = array();
            $resp['error'] = false;
            $resp['message'] = "Đăng nhập thành công!";
            echo json_encode($resp);
        }
        else {
            $resp = array();
            $resp['error'] = true;
            $resp['message'] = "Tài khoản đã bị vô hiệu hóa! Vui lòng liên hệ quản trị viên để được hỗ trợ";
            echo json_encode($resp);
        }

    } else {
        $resp = array();
        $resp['error'] = true;
        $resp['message'] = "Email hoặc mật khẩu không chính xác";
        echo json_encode($resp);
    }
} else {
    echo 'Phương thức yêu cầu không hợp lệ.';
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
