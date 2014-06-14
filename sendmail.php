<?php

/**
 * @author duccnv
 * @copyright 2014
 */
require_once('lib/class.phpmailer.php');

function sendMailOrder($from, $from_name, $subject, $body) {
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = false; // authentication enabled
    $mail->SMTPSecure = true; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "relay-hosting.secureserver.net";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "info@easynfast.net";
    $mail->Password = "123@abc";
    $mail->SetFrom($from);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress("chauduc.1211@gmail.com");
    $error = '';
    if (!$mail->Send()) {
        $error = "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $error = '';
    }

    return $error;
}
