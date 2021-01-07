<?php

if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "me@yunsuhan.com";
  $headers = "From: ".$mailFrom;
  $text = "You have received an email from ".$name.".\n\n".$message;


  mail($mailTo, $subject, $text, $headers);
  header("Location: contact.php?mailsend");
}



 ?>
