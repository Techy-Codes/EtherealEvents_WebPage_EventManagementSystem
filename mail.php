<?php
$to = "recipient@example.com";
$subject = "Hello";
$message = "Hi there! This is a simple email.";
$headers = "From: sender@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo 'Message sent successfully...';
} else {
    echo 'Message could not be sent.';
}
?>
