<?php
/**
 * Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения.
 */
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
var_dump(array_flip($arr));