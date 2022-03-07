<?php
/**
 * 	Сделайте функцию, которая параметрами принимает 2 числа. Если их сумма больше 10 - пусть функция вернет true, а если нет - false. 
 */

/**
 * isSumMoreThanTen
 * 
 * @param int $num1 
 * @param int $num2
 * 
 * @return boolean tells if sum more than 10
 */
function isSumMoreThatTen(int $num1, int $num2) : boolean {
    return ($num1 + $num2) > 10;
}
var_dump(isSumMoreThatTen(5, 4));