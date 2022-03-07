<?php
/**
 * 	Сделайте функцию, которая возвращает квадрат числа. Число передается параметром.
 */

/**
 * powDouble
 *
 * @param  int $num number to double pow
 * @return int the result of powing
 */
function powDouble(int $num) : int {
    return pow($num, 2);
}
echo powDouble(4);