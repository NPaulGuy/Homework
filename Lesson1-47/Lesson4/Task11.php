<?php
/**
 * Дан массив с числами. Числа могут быть положительными и отрицательными. 
 * Найдите сумму положительных элементов этого массива. 
 */
$arr = [1, -3, 5, 11, -125];
$result = 0; 
foreach ($arr as $elem) {
    if ($elem > 0) {
        $result += $elem;
    }
}
echo $result;