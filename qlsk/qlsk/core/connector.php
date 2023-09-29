<?php

// Thông tin kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost"; // Địa chỉ máy chủ cơ sở dữ liệu (local)
$username = "root"; // Tên đăng nhập MySQL
$password = ""; // Mật khẩu MySQL
$database = "quanlysukien"; // Tên cơ sở dữ liệu MySQL

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
