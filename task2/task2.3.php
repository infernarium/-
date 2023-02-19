<?php
header('content-type:image/jpeg');

$im = imagecreatefromjpeg("./cat.jpg");

if($im && imagefilter($im, IMG_FILTER_GRAYSCALE))
{
  // echo 'Изображение преобразовано к градациям серого.';
  imagejpeg($im);
  imagedestroy($im);
}
else
{
    // echo 'Преобразование не удалось.';
}
?>
