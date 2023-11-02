<?php
require "../../connector.php";

// Lấy ID của lớp từ request GET
$id = $_GET['id'];

// Câu truy vấn SQL để xóa lớp
$sql = "DELETE FROM lop WHERE MaLop = $id";

// Thực hiện truy vấn và kiểm tra kết quả
if ($conn->query($sql) === TRUE) {
    $resp = array();
    $resp['error'] = false;
    $resp['message'] = "Xóa lớp thành công!";
    echo json_encode($resp);
} else {
    $resp = array();
    $resp['error'] = true;
    $resp['message'] = "Lỗi! Vui lòng thử lại";
    echo json_encode($resp);
}
?>