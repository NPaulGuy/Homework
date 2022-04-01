<?php
/**
 * Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false. 
 */
/**
 * isNumNegative
 * 
 * @param int $num
 * 
 * @return boolean tells if the num is negative
 */
function isNumNegative(int $num) : boolean {
    return $num < 0;
}
var_dump(isNumNegative(-4));