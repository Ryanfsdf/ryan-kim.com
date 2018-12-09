<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \nMessage: $message";
$recipient = "";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "I'll get back to you within 24 hours!" . " -" . "<a href='/' style='text-decoration:none;color:blue;'> Return Home</a>";
?>
