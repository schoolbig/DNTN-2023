<?php
    require "../../connector.php";
    $falID = $_POST['falID'];
    $className = $_POST['className'];
    $classStartYear = $_POST['classStartYear'];
    $classDescription = $_POST['classDescription'];

    $sql ="INSERT INTO lop (TenLop, NamBatDau, MoTa, TrangThai, MaKhoa) VALUES ('$className', '$classStartYear', '$classDescription', 1, $falID)";


    if ($conn->query($sql) === TRUE) {
        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Thêm lớp mới thành công!";
        echo json_encode($resp);
    } else {
        $resp = array();
        $resp['error'] = true;
        $resp['message'] = "Lỗi! Vui lòng thử lại";
        echo json_encode($resp);
    }
?>