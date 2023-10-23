<?php
require "../../connector.php";

$year_name = $_POST['year_name'];
$year_desc = $_POST['year_desc'];
$year_bg_date = $_POST['bg_date'];
$year_e_date = $_POST['e_date'];


// Thêm dữ liệu vào database
$sql = "INSERT INTO namhoc (TenNamHoc, NgayBatDau, NgayKetThuc, MoTa) VALUES ('$year_name', '$year_bg_date', '$year_e_date', '$year_desc')";

if ($conn->query($sql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Thêm năm học thành công!";
        echo json_encode($resp);
} else {
        $resp = array();
        $resp['error'] = true;
        $resp['message'] = "Lỗi! Vui lòng thử lại";
        echo json_encode($resp);
}
