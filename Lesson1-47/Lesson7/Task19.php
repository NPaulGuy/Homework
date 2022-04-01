<?php
/**
 * Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив 'a'=>1, 'b'=>2, 'c'=>3'.
 */
$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
$arr = array_combine($keys, $values);
var_dump($arr);