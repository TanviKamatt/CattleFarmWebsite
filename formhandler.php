<?php
$name = $_POST['name'];
$visitor-email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
$email_from = 'email@email.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
"User email: $visitor-email.\n".
"User subject: $subject.\n". 
"User message: $message.\n";

$to = 'tanvikamat16@gmail.com';

$headers = "From: $email_from \r\n ";

$headers .="Reply-to: $visitor-email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>