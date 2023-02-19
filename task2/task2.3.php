<?php
header('content-type:image/jpeg');

$im = imagecreatefromjpeg("cat.jpg");

imagejpeg($im);
imagedestroy($im);
?>
