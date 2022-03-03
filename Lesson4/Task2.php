<?php
/**
 * Дан массив с элементами 1, 2, 3, 4, 5. 
 * С помощью цикла foreach найдите сумму элементов этого массива.
 * Запишите ее в переменную $result. 
 */
$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $elem) {
    $result += $elem;
}
echo $result;