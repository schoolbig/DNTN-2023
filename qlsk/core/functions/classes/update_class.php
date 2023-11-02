<?php
require "../../connector.php";

// Lấy dữ liệu từ request POST
$id = $_POST['class-id'];
$class_name = $_POST['class-name'];
$class_desc = $_POST['class-desc'];
$class_status = $_POST['class_status'];
$class_begin_year = $_POST['class-begin'];
// Câu truy vấn SQL để cập nhật thông tin lớp
$sql = "UPDATE lop SET TenLop = '$class_name', MoTa = '$class_desc', TrangThai = $class_status, NamBatDau = $class_begin_year WHERE MaLop = $id";

// Thực hiện truy vấn và kiểm tra kết quả
if ($conn->query($sql) === TRUE) {
    $resp = array();
    $resp['error'] = false;
    $resp['message'] = "Cập nhật thông tin lớp thành công!";
    echo json_encode($resp);
} else {
    $resp = array();
    $resp['error'] = true;
    $resp['message'] = "Lỗi! Vui lòng thử lại";
    echo json_encode($resp);
}
?>