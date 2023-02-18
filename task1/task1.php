<?php

/* Описание скалярных переменных */

$a = 15; # целое
$fl = 3.14; # с плавающей точкой
$boo = TRUE; # boolean
$str = "stroka"; # строка
$nol = 0;
$pusto = "";

$s1 = "Переменная a = $a \n"; # разбираемая строка
$s2 = 'Переменная a = $a \n'; # неразбираемая строка

/* Описание массива */

$mas = array(
  "one" => TRUE,
  1 => -20,
  "three" => 3.14
);
$mas[] = "two";
$mas["four"] = 4;

/* Описание константы */

define("HOST", "kappa.cs.karelia.ru");


/* Вывод значения переменной на экран */
//echo $a, "\n";

/*---------------------------------------------------------------------------------------------------------------------------------------------------*/
echo "<table style='border: 2px solid black;'>";

echo "<tr>", "<td>№", "</td>", "<td>", "Команда", "</td>", "<td>", "Результат", "</td>", "</tr>";

echo "<tr>", "<td>1", "</td>", "<td>echo \$a, \$fl, \$boo, \$str", "</td>", "<td>", $a, ' ', $fl, ' ', $boo, ' ', $str, "</td>", "</tr>"; //1
echo "<tr>", "<td>2", "</td>", "<td>echo (string)\$a.\$str", "</td>", "<td>", (string) $a . $str, "</td>", "</tr>"; //2
echo "<tr>", "<td>3", "</td>", "<td>var_dump(\$a> < == ===\$str)", "</td>", "<td>", var_dump($a > $str), ' ', var_dump($a < $str), ' ', var_dump($a == $str), ' ', var_dump($a === $str), "</td>", "</tr>"; //3
echo "<tr>", "<td>4", "</td>", "<td>var_dump(\$nol == ===\$pusto)", "</td>", "<td>", var_dump($nol == $pusto), ' ', var_dump($nol === $pusto), "</td>", "</tr>"; //4
echo "<tr>", "<td>5", "</td>", "<td>echo", "</td>", "<td>", $s1, ' ', $s2, "</td>", "</tr>"; //5
echo "<tr>", "<td>6", "</td>", "<td>echo \$mas['one'], \$mas[2], \$mas[3]", "</td>", "<td>", $mas["one"], ' ', $mas[2], ' ', $mas[3], "</td>", "</tr>"; //6
echo "<tr>", "<td>7", "</td>", "<td>var_dump(\$mas)", "</td>", "<td>", var_dump($mas), "</td>", "</tr>"; //7
echo "<tr>", "<td>8", "</td>", "<td>implode(", ",\$mas)", "</td>", "<td>", implode(", ", $mas), "</td>", "</tr>"; //8

$name = "a";
echo "<tr>", "<td>9", "</td>", "<td>\$name = 'a'; echo \${\$name}", "</td>", "<td>", ${$name}, "</td>", "</tr>"; //9

$ref = & $a;
$ref = 228;
echo "<tr>", "<td>10", "</td>", "<td>\$ref = &\$a; \$ref = 228; echo \$a", "</td>", "<td>", $a, "</td>", "</tr>"; //10

echo "<tr>", "<td>11", "</td>", "<td>echo HOST", "</td>", "<td>", HOST, "</td>", "</tr>"; //11

$file_list = `ls -al`;
echo "<tr>", "<td>12", "</td>", "<td>\$file_list = `ls -al`; echo \$file_list", "</td>", "<td>", $file_list, "</td>", "</tr>"; //12

echo "<tr>", "<td>13", "</td>", "<td>echo \$str.\$nol.(string)1", "</td>", "<td>", $str . $nol . (string) 1, "</td>", "</tr>"; //13

basename(__FILE__);
echo "<tr>", "<td>14", "</td>", "<td>basename(__FILE__); echo __LINE__", "</td>", "<td>", __LINE__, "</td>", "</tr>"; //14

$colours = array("Каждый" => "Красный", "Охотник" => "Оранжевый", "Желает" => "Жёлтый", "Знать" => "Зеленый", "Где" => "Голубой", "Сидит" => "Синий", "Фазан" => "Фиолеттовый");
asort($colours);
echo "<tr>", "<td>15", "</td>", "<td>asort(\$colours)", "</td>", "<td>", "<table>";
foreach ($colours as $item => $color):
  echo "<tr><td>", $item, "</td><td>", $color, "</td></tr>";
endforeach;
echo "</table>", "</td>", "</tr>"; //15

function f_color(int $n)
{
  if ($n % 2 == 0)
    $tmp = "<p style='color: green;'>чётное число</p>";
  else if ($n % 2 != 0)
    $tmp = "<p style='color: red;'>нечётное число</p>";
  else
    $tmp = "<p style='color: yellow;'>Упс, что то пошло не по плану</p>";

  return $tmp;
}
echo "<tr>", "<td>16", "</td>", "<td>", "f_color()", "</td>", "<td>", f_color(5), f_color(6), f_color(0), "</td>", "</tr>"; //16

echo "</table>";
?>