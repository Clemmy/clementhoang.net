<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'clement.hoang24@gmail.com';
  $subject = 'Visitor Message';

  $body = "From: $name\n E-Mail: $email\n Message:\n $message";

  if ($_POST['submit']) {
    if (mail ($to, $subject, $body)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, please try again!</p>';
    }
  }
?>
