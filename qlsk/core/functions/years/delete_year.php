<?php
require "../../connector.php";
$year_id = $_GET['id'];
$check = "SELECT * FROM namhoc WHERE MaNamHoc = '$year_id'";
$result = $conn->query($check);
if ($result->num_rows > 0) {
    $year_del_sql = "DELETE FROM namhoc WHERE MaNamHoc = '$year_id'";
    if ($conn->query($year_del_sql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Xóa năm học thành công!";
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
    $resp['message'] = "Năm học không tồn tại!";
    echo json_encode($resp);
}

