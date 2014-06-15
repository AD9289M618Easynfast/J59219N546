<?php

/**
 * @author duccnv
 * @copyright 2014
 */
 require 'func-sendMail.php';
 $from=$from_name=$subject=$body="";
 $from=$_POST['from_email'];
 $from_name = $_POST['from_name'];
 $subject = $_POST['subject'];
 $body = $_POST['message_body'];
 $error = sendMailOrder($from, $from_name, $subject, $body);
 if ($error == '') {
    echo 'Completed';
 }else{
    echo $error;
 } 
?>