<?php
/**
 * Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном случае выведите 'Неверно'. 
 */
$a = 1;
$b = 6;
if ($a > 2 && $a < 11 || $b >= 6 && $b < 14) {
    echo "Верно";
} else {
    echo "Неверно";
}