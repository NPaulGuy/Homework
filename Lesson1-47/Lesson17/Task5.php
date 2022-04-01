<?php
/**
 * Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false. 
 */
/**
 * @param int $num
 * 
 * @return bool
 */
function isEven(int $num) : bool {
    return ($num % 2 == 0);
}
$isEven = isEven(4);
var_dump($isEven);