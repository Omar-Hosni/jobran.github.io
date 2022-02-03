<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com'
$email_subject = 'New form submission'
$email_body ="User name: $name.\n".
"user Email:$visitor_email.\n".
"Subject:$Subject.\n".
"user Message: $message .\n";
$to = 'Jubranii45889900@gmail.com'
$headers = "from: $email_from \r\n";
$headers .= "Reply- To: $visitor_email \r\n";
mail ($to,$email_subject,$email_body,$headers)
header ("<location: contact.html ");
?>
