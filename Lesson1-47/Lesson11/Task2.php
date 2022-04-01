<?php
/**
 * Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции. 
 */
/**
 * numbersSum
 *
 * @param  mixed $num1
 * @param  mixed $num2
 * @return void
 */
function numbersSum(int $num1, int $num2) : int {
    return $num1 + $num2;
}
echo numbersSum(3, 4);