<?php
/**
 * Дружественные числа - два различных числа, для которых сумма всех собственных делителей первого числа равна второму числу и наоборот, сумма всех собственных делителей второго числа равна первому числу. 
 * Например, 220 и 284. Делители для 220 это 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 и 110, сумма делителей равна 284. Делители для 284 это 1, 2, 4, 71 и 142, их сумма равна 220. 
 * Задача: найдите все пары дружественных чисел в промежутке от 1 до 10000. Для этого сделайте вспомогательную функцию, которая находит все делители числа и возвращает их в виде массива. Также сделайте функцию, которая параметром принимает массив, а возвращает его сумму. 
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
 * @param array $arr
 * 
 * @return int
 */
function getArraySum(array $arr) : int {
    return array_sum($arr);
}
/**
 * @return array
 */
function getFriendlyPairs() : array {
    $frienldyPairs = [];
    for ($i = 1; $i < 10000; $i++) {
        for ($j = $i + 1; $j <= 10000; $j++) {
            if (
                $i == getArraySum(getDivisors($j)) &&
                $j == getArraySum(getDivisors($i))
            ) {
                $frienldyPairs[] = [$i , $j];
            }
        }
    }
    return $frienldyPairs;
}
var_dump(getFriendlyPairs());