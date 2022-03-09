<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@godhraestate.com';

$email_subject = 'new application';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "User Message: $message.\n".;

$to = 'aniketbaswanivines2454@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_body,$headers);

headers("location: index.html");
?>