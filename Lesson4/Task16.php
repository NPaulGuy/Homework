<?php
/**
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. 
 * Текущий день должен храниться в переменной $day. 
 */
// date("N") выдаёт номер дня недели, начиная с 1. Поэтому массив начинается с ключа "1"!
$arr = [1 =>'понедельник', 'вторник','среда','четверг','пятница', 'суббота','воскресенье'];
$day = date("N");
foreach ($arr as $key => $elem) {
    if ($key == $day) {
        echo "<i>$elem</i><br>";
    } else {
        echo "$elem<br>";
    }
}