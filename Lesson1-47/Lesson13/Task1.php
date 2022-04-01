<?php
/**
 * Сделайте функцию, которая параметрами принимает 2 числа. Если эти числа равны - пусть функция вернет true, а если не равны - false. 
 */

/**
 * numCompare
 *
 * @param  int $num1 first number
 * @param  int $num2 second number
 * @return boolean result of compare operation
 */
function numCompare(int $num1, int $num2) : boolean {
    return $num1 === $num2;
}
var_dump(numCompare(1, 3));