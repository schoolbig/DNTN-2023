<?php
require_once '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
try {
    $mail->isSMTP();
    $mail->SMTPDebug  = 2;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ntrungtruc70@gmail.com';
    $mail->Password = 'nocgxqbgtnodvtqj';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('ngtrungtruc70@gmail.com', 'Hệ thống quản lý phòng khám');

    //receiver address and name
    $mail->addAddress('s2kirbys2@gmail.com', '');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'test';
    $mail->Body = 'test';

    $mail->send();


    return true;
} catch (Exception $e) {

    return false;
}