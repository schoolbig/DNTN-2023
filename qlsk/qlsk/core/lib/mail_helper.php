<?php

require_once '../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_mail($title, $message, $des)
{
    $mail = new PHPMailer();
    $mail->CharSet = "UTF-8";

        $mail->isSMTP();

        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ntrungtruc70@gmail.com';
        $mail->Password = 'nocgxqbgtnodvtqj';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        //Recipients
        $mail->setFrom('ngtrungtruc70@gmail.com', 'BDU-Hệ thống quản lý sự kiện');

        //receiver address and name
        $mail->addAddress($des, '');

        // Content
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $message;

        if (!$mail->send()) {
            $error = 'Lỗi: ' . $mail->ErrorInfo;
            return $error;
        }
        else {
            return true;
        }



}
