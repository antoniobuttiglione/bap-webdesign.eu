<?php

// Include the config file
include('./php/config.php');

// Include any necessary functions (e.g., cleanEvilTags, cleanData)

if (!empty($_POST)) {
  $data['success'] = true;
  $data['errors'] = []; // Initialize errors array

  // Validate form data
  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  $comment = filter_var($_POST["comment"], FILTER_SANITIZE_STRING);

  if (empty($name)) {
    $data['errors']['name'] = 'Please enter your name.';
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $data['errors']['email'] = 'Please enter a valid email address.';
  }

  if (empty($comment)) {
    $data['errors']['comment'] = 'Please enter your comment.';
  }

  // reCAPTCHA v3 Verification (Replace with your actual keys)
  if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
    $secretKey = $recaptchaSiteKey; // Replace with your actual site key
    $ip = $_SERVER['REMOTE_ADDR'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha&remoteip=$ip");
    $responseKeys = json_decode($response, true);

    if (!$responseKeys['success']) {
      $data['success'] = false;
      $data['errors']['recaptcha'] = 'reCAPTCHA verification failed.';
    }
  } else {
    $data['success'] = false;
    $data['errors']['recaptcha'] = 'Please complete the reCAPTCHA.';
  }

  // Send email if validation and reCAPTCHA are successful
  if ($data['success']) {
    $emailTo = "antonio.buttiglione@gmail.com"; // Replace with your recipient email
    $emailFrom = "info@abvideomaker.com";
    $emailSubject = "Info AB Video Maker";

    $message = "NAME: $name<br>EMAIL: $email<br>COMMENT: $comment";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html; charset=utf-8" . "\r\n";
    $headers .= "From: <$emailFrom>" . "\r\n";

    if (mail($emailTo, $emailSubject, $message, $headers)) {
      $data['message'] = 'Thank you for compiling the form. Your email has been sent.'; // Updated message
    } else {
      $data['success'] = false;
      $data['errors'][] = 'Error sending email.';
    }
  }

  echo json_encode($data);
}

?>
