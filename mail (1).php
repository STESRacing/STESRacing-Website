
<?php 
echo "<script type='text/javascript'> alert('We will get back to you in a short while.'); </script>";
$name = $_POST['Name'];
$email = $_POST['Email'];
$phnumber = $_POST['PhNumber'];
$message = $_POST['Message'];
$formcontent=" From: $name \n Phone Number: $phnumber \n Message: $message";
$recipient = "info@spharenterprises.com";
$subject = "Inquiry - Sphar Enterprises";
$mailheader = "From: $email \r\n";
$sent = mail($recipient, $subject, $formcontent, $mailheader);

?>