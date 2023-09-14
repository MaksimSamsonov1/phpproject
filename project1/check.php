<?php 
  $email = $_POST['email'];
  $message = $_POST['message'];

  $error = '';

  if (trim($email) == '')
  $error = 'Enter Your Email Address';
  else if (trim($message) == '')
  $error = 'Enter Your Message';
  else if (strlen($message) < 10)
  $error = 'Enter More 10 Letters';

  if ($error != '') {
    echo $error;
    exit ;
  }

  $subject = "=?utf-8?B?".base64_encode("Test Message")."?=";

  $headers = "From: $email\r\nReply-To: $email\r\nContent-type: text/html;charset=utf-8\r\n";

  mail('samson123459lkj@gmail.com', $subject, $message, $headers);

  header('Location: about.php');
  ?>