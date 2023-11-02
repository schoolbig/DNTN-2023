<?php
require "../../connector.php";

// Get data from the POST request
$locationId = $_POST['id'];
$locationName = $_POST['name'];
$locationStatus = $_POST['status'];
$locationLongitude = $_POST['longitude'];
$locationLatitude = $_POST['latitude'];
$locationDescription = $_POST['description'];

// Update data in the database
$updateQuery = "UPDATE diadiem 
                SET TenDiaDiem = '$locationName',
                    KinhDo = '$locationLongitude',
                    ViDo = '$locationLatitude',
                    MoTa = '$locationDescription',
                    TrangThai = '$locationStatus'
                WHERE MaDiaDiem = '$locationId'";

$response = array();

if ($conn->query($updateQuery) === TRUE) {
    $response['error'] = false;
    $response['message'] = "Cập nhật địa điểm thành công!";
} else {
    $response['error'] = true;
    $response['message'] = "Lỗi! Vui lòng thử lại.";
}

echo json_encode($response);
?>




