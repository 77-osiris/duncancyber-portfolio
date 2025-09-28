<?php
// contact.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $message = trim($_POST['message'] ?? '');
  if (!$name || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$message) {
    http_response_code(422); echo 'Invalid input'; exit;
  }

  $to = 'stewart@duncancyber.tech';           
  $subject = "Duncan Cyber Contact Form: $name";
  $body = "From: $name <$email>\n\n$message";
  $headers = "From: noreply@duncancyber.tech\r\nReply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo 'OK';
  } else {
    http_response_code(500); echo 'Mail error';
  }
}
