<?php
/**
 * Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный ключ из данного массива.
 */
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo array_rand($arr);