<?php
$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']
$to = "kesarwaniishaan4@gmail.com";
$subject = $_POST['Subject']
$txt = "Message From ".$name . "\r\n" . $message;
$headers = "From: $email" . "\r\n" . "CC: $email";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    }
    //redirect
    echo 'sent successfully';
    ?>
