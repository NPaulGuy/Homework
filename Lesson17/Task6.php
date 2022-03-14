<?php
/**
 * Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих чисел. Для этого используйте вспомогательную функцию isEven из предыдущей задачи.
 */
/**
 * @param int $num
 * 
 * @return bool
 */
function isEven(int $num) : bool {
    return ($num % 2 == 0);
}
$arr = [1, 5, 7, 22, 125];
$result = [];
foreach ($arr as $elem) {
    if (isEven($elem)) {
        $result[] = $elem;
    }
}
var_dump($result);