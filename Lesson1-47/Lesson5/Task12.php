<?php
/**
 * Дан массив в числами, к примеру [1, 2, -1, -2, 3, -3]. 
 * Создайте из него новый массив так, чтобы отрицательные числа стали положительными, то есть у нас должен получиться такой массив: [1, 2, 1, 2, 3, 3]
 */
$arr = [1, 2, -1, -2, 3, -3];
$newArr = [];
foreach ($arr as $elem) {
    $newArr[] = abs($elem);
}
var_dump($newArr);