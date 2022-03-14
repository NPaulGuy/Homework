<?php
/**
 * Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей. Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи. 
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
/**
 * @param int $num1
 * @param int $num2
 * 
 * @return array 
 */
function getCommonDivisors(int $num1, int $num2) : array {
    $arr1 = getDivisors($num1);
    $arr2 = getDivisors($num2);
    return array_intersect($arr1, $arr2);
}
var_dump(getCommonDivisors(55, 40));