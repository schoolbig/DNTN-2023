<?php
session_start();
// Hủy bỏ tất cả các biến phiên
$_SESSION = array();
session_destroy();
// Chuyển hướng về trang đăng nhập hoặc trang chủ
header('Location: ../../login.php');
exit;
