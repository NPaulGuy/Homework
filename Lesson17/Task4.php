<?php
/**
 * Найдите все года от 1 до 2022, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.
 */
/**
 * @param int $num
 * 
 * @return int
 */
function getDigitsSum(int $num) : int {
    $arr = str_split($num);
    return array_sum($arr);
}
$years = [];
for ($i = 1; $i <= 2022; $i++) {
    if (getDigitsSum($i) == 13) {
        $years[] = $i;
    }
}
var_dump($years);