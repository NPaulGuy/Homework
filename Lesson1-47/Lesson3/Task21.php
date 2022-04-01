<?php
/**
 * В переменной $month лежит какое-то число из интервала от 1 до 12. 
 * Определите в какую пору года попадает этот месяц (зима, лето, весна, осень). 
 */
$month = mt_rand(1, 12);
if ($month == 12 || $month >= 1 && $month < 3) {
    echo "Зима";
} elseif ($month >= 3 && $month < 6) {
    echo "Весна";
} elseif ($month >= 6 && $month < 9) {
    echo "Лето";
} elseif ($month >= 9 && $month < 12) {
    echo "Осень";
}