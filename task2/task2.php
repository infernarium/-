<?php
$im = imagecreatetruecolor(100, 320);

$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);
$green = imagecolorallocate($im, 0, 255, 0);

// массив точек для треугольника
$values = array(
    0,
    100, // Point 1 (x, y)

    50,
    0, // Point 2 (x, y)

    100,
    100, // Point 3 (x, y)
);

imagefilledpolygon($im, $values, 3, $green); // рисование треугольника

imagefilledellipse($im, 50, 160, 100, 100, $red); //залитый круг

imagefilledrectangle($im, 0, 220, 100, 320, $blue); //залитый прямоугольник

// прорисовка
header("Content-type: image/png");
imagepng($im);

// освобождение памяти
imagedestroy($im);

?>