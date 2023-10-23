<?php
require "../../connector.php";

$s_name = $_POST['s_name'];
$s_desc = $_POST['s_desc'];
$s_bg_date = $_POST['bg_date'];
$s_e_date = $_POST['e_date'];
$s_year_id = $_POST['s_year'];

// Thêm dữ liệu vào database
$sql = "INSERT INTO hocky (TenHocKy, NgayBatDau, NgayKetThuc, MoTa, MaNamHoc) VALUES ('$s_name', '$s_bg_date', '$s_e_date', '$s_desc', '$s_year_id')";

if ($conn->query($sql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Thêm học kỳ thành công!";
        echo json_encode($resp);
} else {
        $resp = array();
        $resp['error'] = true;
        $resp['message'] = "Lỗi! Vui lòng thử lại";
        echo json_encode($resp);
}
