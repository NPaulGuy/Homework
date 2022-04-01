<?php
/**
 * Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр. 
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
echo getDigitsSum(574);