<?php
$to = "vishalchaudhari389@gmail.com";
$body = "Hi there this is test mail using mail function";
$subject = "Test Mail";
$headers = "From: vishalchaudhari7719@gmail.com\r\nCC: vishalchaudhari7719@gmail.com";

if(mail($to,$subject,$body,$headers)) {
    echo "Mail successfully sent to $to....";
} else{
    echo "Mail sending fail...";
}

?>