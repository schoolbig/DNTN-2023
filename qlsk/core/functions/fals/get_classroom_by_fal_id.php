<?php
require "../../connector.php";
$id = $_GET['id'];
// Lấy tên file ảnh để xóa
$query = "SELECT * FROM lop WHERE MaKhoa = '$id'";
$result = $conn->query($query);
$falList = array();
// Lặp qua kết quả và thêm thông tin khoa vào mảng
while ($row = $result->fetch_assoc()) {
    $falList[] = $row;
}
echo json_encode($falList);