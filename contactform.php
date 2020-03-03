<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "alias_kentin@hotmail.fr";
  $headers = "From: ".$mailFrom;
  $txt = "Message reçu de".$name.".\n\n".$message;



  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.html?mailsend");
}
?>
