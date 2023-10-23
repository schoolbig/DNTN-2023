<?php
require "../../connector.php";

$cate_name = $_POST['cate-name'];
$cate_desc = $_POST['cate-desc'];

// Xử lý hình ảnh
$targetDir = "../../../images/uploads/";
$uniqueName = uniqid() . "_" . basename($_FILES["cate-image"]["name"]);
$targetFilePath = $targetDir . $uniqueName;
$imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["cate-image"]["tmp_name"], $targetFilePath)) {
    // Thêm dữ liệu vào database
    $sql = "INSERT INTO loaisukien (TenLoai, MoTa, HinhAnh, TrangThai) VALUES ('$cate_name', '$cate_desc', '$uniqueName', 1)";

    if ($conn->query($sql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Thêm danh mục thành công!";
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