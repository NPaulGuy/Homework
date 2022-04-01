<?php
/**
 * Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи. 
 */
/**
 * @param int $num
 * 
 * @return boolean
 */
function isNumberInRange(int $num): bool {
    return $num > 0 && $num < 10;
}
$arr = [1, 33, 7, 621, 367, 2];
$result = [];
foreach ($arr as $elem) {
    if (isNumberInRange($elem)) {
        $result[] = $elem;
    }
}
var_dump($result);