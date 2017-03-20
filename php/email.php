<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$email_from = 'bretth73@gmail.com';
$email_subject = "Website Form submission";
$email_body = "You have received a new message from $name.\n".
"Here is the message:\n $message .";
$to = "bretth73@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
if(@mail($emailRecipient, $subject, $message, $headers))
{
  echo "Mail Sent Successfully";
}else{
  echo "Mail Not Sent";
}
?>