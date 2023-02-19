<?php
header('Content-Type: image/jpeg');

$im = imagecreatefromjpeg("1.jpg");

$text_color = imagecolorallocate($im, 255, 255, 255);

$text = 'ЕГЭ ПО РИСОВАНИЮ';
$font = './arial.ttf';
$file = 'demotivator.jpg';

imagettftext($im, 36, 0, 65, 380, $text_color, realpath($font), $text);

imagejpeg($im, 'demotivator.jpg');
imagedestroy($im);
?>