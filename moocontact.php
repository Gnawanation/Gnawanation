<?php

if (isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_message'])) {
  $name = $_POST['user_name'];
  $email = $_POST['user_email'];
  $message = $_POST['user_message'];
  
  $to = 'contactmoephotos@gmail.com';
  $subject = 'New Contact Form Message';
  $message = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
  $headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo 'Your message was sent successfully!';
  } else {
    echo 'An error occurred while sending your message. Please try again later.';
  }
}

?>
