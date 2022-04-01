<?php
/**
 * 	Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и меньше 10. Если это так - пусть функция возвращает true, если не так - false. 
 */
/**
 * @param int $num
 * 
 * @return boolean
 */
function isNumberInRange(int $num): bool {
    return ($num > 0 && $num < 10);
}
echo isNumberInRange(6);