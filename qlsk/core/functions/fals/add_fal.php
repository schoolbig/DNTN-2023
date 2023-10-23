<?php
require "../../connector.php";

$fal_name = $_POST['fal_name'];
$fal_desc = $_POST['fal_desc'];

// Xử lý hình ảnh
$targetDir = "../../../images/uploads/";
$uniqueName = uniqid() . "_" . basename($_FILES["fal_img"]["name"]);
$targetFilePath = $targetDir . $uniqueName;
$imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["fal_img"]["tmp_name"], $targetFilePath)) {
    // Thêm dữ liệu vào database
    $sql = "INSERT INTO khoa (TenKhoa, MoTa, HinhAnh, TrangThai) VALUES ('$fal_name', '$fal_desc', '$uniqueName', 1)";

    if ($conn->query($sql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Thêm khoa thành công!";
        echo json_encode($resp);
    } else {
        $resp = array();
        $resp['error'] = true;
        $resp['message'] = "Lỗi! Vui lòng thử lại";
        echo json_encode($resp);
    }
} else {
    $resp = array();
    $resp['error'] = true;
    $resp['message'] = "Lỗi trong quá trình upload file ảnh. Vui lòng thử lại!";
    echo json_encode($resp);
}