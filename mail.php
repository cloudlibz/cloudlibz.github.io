<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Contact form\n\nFrom: $name \nMessage: $message";
$recipient = "dhulladhyan2001@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! E-mail sent.";

?>