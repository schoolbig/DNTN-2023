<?php
require "../../connector.php";
// Lấy dữ liệu từ form
$semesterId = $_POST['semester-id'];
$semesterName = $_POST['semester-name'];
$startDate = $_POST['semester-start'];
$endDate = $_POST['semester-end'];
$description = $_POST['semester-desc'];
$semesterYear = $_POST['semester-year'];
// Thực hiện truy vấn cập nhật
$updateQuery = "UPDATE hocky SET MaNamHoc = '$semesterYear', TenHocKy = '$semesterName', NgayBatDau = '$startDate', NgayKetThuc = '$endDate', MoTa = '$description' WHERE MaHocKy = '$semesterId'";

if ($conn->query($updateQuery) === TRUE) {
    $response = array('error' => false, 'message' => 'Cập nhật thông tin học kỳ thành công');
} else {
    $response = array('error' => true, 'message' => 'Lỗi khi cập nhật thông tin học kỳ: ' . $conn->error);
}

// Trả về kết quả dưới dạng JSON
echo json_encode($response);