<?php
/**
 * 	Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится данное число). 
 */
/**
 * @param int $num
 * 
 * @return array
 */
function getDivisors(int $num) : array {
    $arr = [1];
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}
var_dump(getDivisors(28));