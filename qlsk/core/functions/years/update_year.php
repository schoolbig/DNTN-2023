<?php
require "../../connector.php";

$yearId = $_POST['year-id'];
$yearName = $_POST['year-name'];
$startDate = $_POST['year-start'];
$endDate = $_POST['year-end'];
$description = $_POST['year-desc'];

// Cập nhật thông tin năm học trong cơ sở dữ liệu
$sql = "UPDATE namhoc SET
TenNamHoc = '$yearName',
NgayBatDau = '$startDate',
NgayKetThuc = '$endDate',
MoTa = '$description'
WHERE MaNamHoc = '$yearId'";

if ($conn->query($sql) === TRUE) {
    $resp = array();
    $resp['error'] = false;
    $resp['message'] = "Cập nhật năm học thành công!";
    echo json_encode($resp);
} else {
    $resp = array();
    $resp['error'] = true;
    $resp['message'] = "Lỗi! Vui lòng thử lại";
    echo json_encode($resp);
}
?>

