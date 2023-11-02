<?php
require "../../connector.php";
$id = $_POST['cate-id'];
$cate_name = $_POST['cate-name'];
$cate_desc = $_POST['cate-desc'];
$cate_status = $_POST['cate_status'];

// Kiểm tra xem có tệp tin hình ảnh được gửi lên không
if ($_FILES['cate-image']['error'] == UPLOAD_ERR_OK) {
    // Xử lý hình ảnh
    $targetDir = "../../../images/uploads/";
    $uniqueName = uniqid() . "_" . basename($_FILES["cate-image"]["name"]);
    $targetFilePath = $targetDir . $uniqueName;
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["cate-image"]["tmp_name"], $targetFilePath);
    $sql = "UPDATE loaisukien SET TenLoai = '$cate_name', MoTa = '$cate_desc', TrangThai = $cate_status, HinhAnh = '$uniqueName' WHERE MaLoai = $id";

} else {
    $sql = "UPDATE loaisukien SET TenLoai = '$cate_name', MoTa = '$cate_desc', TrangThai = $cate_status WHERE MaLoai = $id";
}

if ($conn->query($sql) === TRUE) {
    $resp = array();
    $resp['error'] = false;
    $resp['message'] = "Cập nhật danh mục thành công!";
    echo json_encode($resp);
} else {
    $resp = array();
    $resp['error'] = true;
    $resp['message'] = "Lỗi! Vui lòng thử lại";
    echo json_encode($resp);
}

