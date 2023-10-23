<?php
require "../../connector.php";
$s_id = $_GET['id'];
$check = "SELECT * FROM diadiem WHERE MaDiaDiem = '$s_id'";
$result = $conn->query($check);
if ($result->num_rows > 0) {
    $year_del_sql = "DELETE FROM diadiem WHERE MaDiaDiem = '$s_id'";
    if ($conn->query($year_del_sql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Xóa địa điểm thành công!";
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
    $resp['message'] = "Địa điểm không tồn tại!";
    echo json_encode($resp);
}

