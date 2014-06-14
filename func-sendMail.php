<?php

/**
 * @author duccnv
 * @copyright 2014
 */
require_once('lib/class.phpmailer.php'); 
function sendMailOrder($from,$from_name,$subject,$body){
    $mail = new PHPMailer(); 
    $mail->IsSMTP(); 
    $mail->SMTPAuth = false; 
    $mail->Host = "relay-hosting.secureserver.net";
    $mail->Port = 25; 
    $mail->IsHTML(true);
    $mail->Username = "info@easynfast.net";
    $mail->Password = "";
    $mail->SetFrom($from);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress("zbaoanhle@gmail.com");
    $error = '';
    if(!$mail->Send())
    {
        $error = "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
        $error = '';
    }
    
   return $error;
}
?>