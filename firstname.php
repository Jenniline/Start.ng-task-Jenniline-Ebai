<?php

$name = $_POST['firstname'];
$email = $_POST['email'];
$title = $_POST['Title'];
$message = $_POST['subject'];

$formcontent=" From:$name \n Email: $email \n Message: $message $ ";
$recipient = "jennilineebai@gmail.com";
$heading = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $heading, $formcontent, $mailheader) or die ("Error!");
echo "Thank you for contacting me! kudos";


?>