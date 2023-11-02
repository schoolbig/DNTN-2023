<?php
require "../../connector.php";
$usr_id = $_GET['id'];
$check = "SELECT * FROM nguoidung WHERE MaNguoiDung = '$usr_id'";
$result = $conn->query($check);
if ($result->num_rows > 0) {
    $user_del_sql = "DELETE FROM nguoidung WHERE MaNguoiDung = '$usr_id'";
    if ($conn->query($user_del_sql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Xóa người dùng thành công!";
        echo json_encode($resp);
    } else {
        $resp = array();
        $resp['error'] = true;
        $resp['message'] = "Lỗi! Vui lòng thử lại!";
        echo json_encode($resp);
    }
} else {
    $resp = array();
    $resp['error'] = true;
    $resp['message'] = "Người dùng không tồn tại!";
    echo json_encode($resp);
}

