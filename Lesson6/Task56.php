<?php
/**
 * Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.
 */
$arr = [63, 11, 27656, 12, 568.3, 254];
foreach ($arr as $num) {
    if ( strpos($num, '3')) {
        echo $num . '<br>';
    }
}