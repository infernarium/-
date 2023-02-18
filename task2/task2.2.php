<?php

// тип содержимого - jpg
header('Content-Type: image/jpeg');

// открытие файла с картинкой и связываем его с идентификатором $im
$im = imagecreatefromjpeg("1.jpg");

// создание цвета текста
$text_color = imagecolorallocate($im, 255, 65, 91);

// прорисовка строки текста шрифтом (латиница!) 5 в координаты 5, 5
//imagestring($im, 5, 250, 350, "HELLO WORLD", $text_color);

$text = 'Вставить текст';
$font = 'arial.ttf';
$color = imagecolorallocate($im, 255, 255, 255);
imagettftext($im, 36, 0, 65, 380, $color, $font, $text);

// вывод изображения в браузер
imagejpeg($im, 'demotivator.jpg');

// освобождение памяти
imagedestroy($im);
?>