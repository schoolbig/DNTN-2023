<?php
require "../../connector.php";

$id = $_POST['id'];
$type = $_POST['type'];

$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$sex = $_POST['sex'];
$password = $_POST['password'];
$add = $_POST['add'];
$status = $_POST['status'];

$sql = "
    UPDATE nguoidung
    SET
      Ho = '$lname',
      Ten = '$fname',
      MatKhau = '$password',
      GioiTinh = $sex,
      SoDienThoai = '$phone',
      DiaChi = '$add',
      TrangThai = $status
    ";


if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
    // Xử lý hình ảnh
    $targetDir = "../../../images/uploads/";
    $uniqueName = uniqid() . "_" . basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $uniqueName;
    $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
    $sql .= ", AnhDaiDien = '$uniqueName'";
}


if ($type == 'student') {
    $classroom_id = $_POST['classroom'];
    $insert_student_info_sql = "
                UPDATE chitietsinhvien 
                SET
                  MaLop = $classroom_id -- MaLop - INT(11)
                WHERE
                  MaNguoiDung = $id";
    $is = $conn->query($insert_student_info_sql);
}
else {
    $role = $_POST['role'];
    $sql .= ", VaiTro = '$role'";
}

$sql .= "WHERE MaNguoiDung = '$id'";

if ($conn->query($sql) === TRUE) {


    $resp = array();
    $resp['error'] = false;
    $resp['message'] = "Cập nhật người dùng thành công!";
    echo json_encode($resp);
} else {
    $resp = array();
    $resp['error'] = true;
    $resp['message'] = "Lỗi! Vui lòng thử lại";
    echo json_encode($resp);
}


