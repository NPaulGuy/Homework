<?php
/**
 * В переменной $day лежит какое-то число из интервала от 1 до 31. 
 * Определите в какую декаду месяца попадает это число (в первую, вторую или третью). 
 */
$day = mt_rand(1, 31);
if ($day >= 1 && $day <= 10) {
    echo "Первая декада";
} elseif ($day >= 11 && $day <=20) {
    echo "Вторая декада";
} elseif ($day >= 21 && $day <=31) {
    echo "Третья декада";
}