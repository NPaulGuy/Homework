<?php
/**
 * Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным. 
 */
$arr = ['понедельник', 'вторник','среда','четверг','пятница', 'суббота','воскресенье'];
foreach ($arr as $key => $elem) {
    if ($key == 5 || $key == 6) {
        echo "<b>$elem<b><br>";
    } else {
        echo "$elem<br>";
    }
}