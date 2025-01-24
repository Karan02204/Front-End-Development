<?php
session_start();

$captcha_code = '';
$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$characters_length = strlen($characters);
$captcha_length = 6;

for ($i = 0; $i < $captcha_length; $i++) {
    $captcha_code .= $characters[rand(0, $characters_length - 1)];
}

$_SESSION['captcha'] = $captcha_code;

header('Content-type: image/png');
$image = imagecreate(120, 40);
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
$font = dirname(__FILE__) . '/arial.ttf';
imagettftext($image, 20, 0, 10, 30, $text_color, $font, $captcha_code);
imagepng($image);
imagedestroy($image);
?>
