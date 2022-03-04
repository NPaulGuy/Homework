<?php
/**
 * Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.
 */
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
$pos = array_search('-', $arr);
array_splice($arr, $pos, 1);
var_dump($arr);