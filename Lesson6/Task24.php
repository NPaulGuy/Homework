<?php
/**
 * Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
 */
$str = 'aaa aaa aaa aaa aaa';
// Находим позицию 1-ого пробела и от неё ищем следующее вхождение пробела, т.е. 2-ой пробел.
echo strpos($str, ' ', strpos($str, ' ') + 1);