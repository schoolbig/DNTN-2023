<?php
require "../../connector.php";

$lct_name = $_POST['lct_name'];
$lct_desc = $_POST['lct_desc'];
$lct_long = $_POST['lct_long'];
$lct_latt = $_POST['lct_latt'];

// Thêm dữ liệu vào database
$lctql = "INSERT INTO diadiem (TenDiaDiem, KinhDo, ViDo, MoTa, TrangThai) VALUES ('$lct_name', '$lct_long', '$lct_latt', '$lct_desc', 1)";

if ($conn->query($lctql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Thêm địa điểm thành công!";
        echo json_encode($resp);
} else {
        $resp = array();
        $resp['error'] = true;
        $resp['message'] = "Lỗi! Vui lòng thử lại";
        echo json_encode($resp);
}
