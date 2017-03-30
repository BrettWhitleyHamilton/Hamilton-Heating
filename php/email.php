<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$phone=$_POST['phone'];
$email_from = 'contact@hamiltonheating.co.uk';
$email_subject = "Recieved message from $name";
$email_body = "You have received a new message from $name.\n".
"There phone number is: $phone . Here is the message:\n $message .";
$to = "hamiltonheating46@gmail.com";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
?>