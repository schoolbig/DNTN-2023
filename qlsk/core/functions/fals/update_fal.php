<?php
require "../../connector.php";
$id = $_POST['fal-id'];
$fal_name = $_POST['fal-name'];
$fal_desc = $_POST['fal-desc'];
$fal_status = $_POST['fal_status'];

// Kiểm tra xem có tệp tin hình ảnh được gửi lên không
if ($_FILES['fal-image']['error'] == UPLOAD_ERR_OK) {
    // Xử lý hình ảnh
    $targetDir = "../../../images/uploads/";
    $uniqueName = uniqid() . "_" . basename($_FILES["fal-image"]["name"]);
    $targetFilePath = $targetDir . $uniqueName;
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["fal-image"]["tmp_name"], $targetFilePath);
    $sql = "UPDATE khoa SET TenKhoa = '$fal_name', MoTa = '$fal_desc', TrangThai = $fal_status, HinhAnh = '$uniqueName' WHERE MaKhoa = $id";

} else {
    $sql = "UPDATE khoa SET TenKhoa = '$fal_name', MoTa = '$fal_desc', TrangThai = $fal_status WHERE MaKhoa = $id";
}

if ($conn->query($sql) === TRUE) {
    $resp = array();
    $resp['error'] = false;
    $resp['message'] = "Cập nhật khoa thành công!";
    echo json_encode($resp);
} else {
    $resp = array();
    $resp['error'] = true;
    $resp['message'] = "Lỗi! Vui lòng thử lại";
    echo json_encode($resp);
}