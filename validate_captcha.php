<?php
session_start();

if (isset($_POST['captcha'])) {
  // Get user entered captcha
  $userCaptcha = $_POST['captcha'];

  // Get stored captcha from session
  $storedCaptcha = isset($_SESSION['captcha_code']) ? $_SESSION['captcha_code'] : '';

  // Check if the user entered captcha matches stored captcha
  if (strcasecmp($userCaptcha, $storedCaptcha) === 0) {
    // captcha is valid
    echo "valid";
  } else {
    // captcha is not valid
    echo "invalid";
  }
} else {
  // captcha not provided
  echo "missing";
}
?>
