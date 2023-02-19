<?php

// тип содержимого - jpg
header('Content-Type: image/jpeg');

// открытие файла с картинкой и связываем его с идентификатором $im
$im = imagecreatefromjpeg("./1.jpg");

// создание цвета текста
$text_color = imagecolorallocate($im, 255, 255, 255);

// Текст надписи
$text = 'ЕГЭ ПО РИСОВАНИЮ';
// Замена пути к шрифту на пользовательский
$font = './arial.ttf';
$file = 'demotivator.jpg';
// прорисовка строки текста шрифтом (латиница!) 5 в координаты 5, 5

imagettftext($im, 36, 0, 65, 380, $text_color, realpath($font),$text);
// вывод изображения в браузер
imagejpeg($im,'demotivator.jpg');
imagedestroy($im);
?>
