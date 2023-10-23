<?php
require "../../connector.php";
$fal_id = $_GET['id'];
// Lấy tên file ảnh để xóa
$sql_get_image = "SELECT * FROM khoa WHERE MaKhoa = '$fal_id'";
$result = $conn->query($sql_get_image);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageToDelete = $row['HinhAnh'];

    // Xóa file ảnh từ thư mục
    $targetFilePath = "../../../images/uploads/" . $imageToDelete;
    if (file_exists($targetFilePath)) {
        unlink($targetFilePath);
    }

    $cate_del_sql = "DELETE FROM khoa WHERE MaKhoa = '$fal_id'";
    if ($conn->query($cate_del_sql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Xóa khoa thành công!";
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
    $resp['message'] = "Khoa không tồn tại!";
    echo json_encode($resp);
}

