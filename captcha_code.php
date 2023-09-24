<?php
session_start();
// Generate a random captcha
$captchaCode = substr(md5(uniqid(mt_rand(), true)), 0, 6);
// Store the captcha insession
$_SESSION['captcha_code'] = $captchaCode;
// Create blank image
$image = imagecreatetruecolor(150, 50);
// background color
$bgColor = imagecolorallocate($image, 48, 106, 19);
imagefill($image, 0, 0, $bgColor);
// text color
$textColor = imagecolorallocate($image, 255, 255, 255);
// Draw captcha text on image
imagettftext($image, 20, 0, 30, 30, $textColor, __DIR__ . '/assets/fonts/Poppins-Regular.ttf', $captchaCode); // Adjusted font path
// Output image as png
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
