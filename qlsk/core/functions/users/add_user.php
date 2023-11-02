<?php
require "../../connector.php";

var_dump($_POST);

$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$sex = $_POST['sex'];
$password = $_POST['password'];
$add = $_POST['add'];
$role = $_POST['role'];
// Xử lý hình ảnh
$targetDir = "../../../images/uploads/";
$uniqueName = uniqid() . "_" . basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $uniqueName;
$imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
    // Thêm dữ liệu vào database
    $sql = "
        INSERT INTO nguoidung
            (
             Ho
             ,Ten
             ,Email
             ,MatKhau
             ,VaiTro
             ,TrangThai
             ,GioiTinh
             ,SoDienThoai
             ,DiaChi,
             AnhDaiDien
            )
            VALUES
            (
             '$lname' -- Ho - VARCHAR(100)
             ,'$fname' -- Ten - VARCHAR(100)
             ,'$mail' -- Email - VARCHAR(200)
             ,'$password' -- MatKhau - VARCHAR(200)
             ,$role -- VaiTro - INT(11)
             ,1 -- TrangThai - BIT(1)
             ,$sex -- GioiTinh - BIT(1)
             ,'$phone' -- SoDienThoai - VARCHAR(45)
             ,'$add' -- DiaChi - VARCHAR(1000)
             ,'$uniqueName'
            );
    ";

    if ($conn->query($sql) === TRUE) {
        $classroom_id = $_POST['classroom'];
        // Lấy ID của dòng vừa được thêm vào
        $insertedId = $conn->insert_id;
        if ($role === '0') {
            $insert_student_info_sql = "
                INSERT INTO chitietsinhvien
                (
                  MaChiTiet
                 ,MaLop
                 ,MaNguoiDung
                )
                VALUES
                (
                  0 
                 ,$classroom_id
                 ,$insertedId
                );
            ";
            $conn->query($insert_student_info_sql);
        }


        $resp = array();
        $resp['error'] = false;
        $resp['message'] = "Thêm người dùng thành công!";
        echo json_encode($resp);
    } else {
        $resp = array();
        $resp['error'] = true;
        $resp['message'] = "Lỗi! Vui lòng thử lại";
        echo json_encode($resp);
    }
} else {
    $resp = array();
    $resp['error'] = true;
    $resp['message'] = "Lỗi trong quá trình upload file ảnh. Vui lòng thử lại!";
    echo json_encode($resp);
}