<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$email_from = 'info@oluwatoyinwebsite.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n";



$to = 'oluwatoyinoniyanda1000@gmail.com';

$headers = "From: $email_from\r\n";

$headers .=  "Reply-TO: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers); 


header("Location:contact.html")

?>