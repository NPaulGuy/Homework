<?php
/**
 * Дан массив с элементами ' a ', ' b ', ' с '. Создайте новый массив, в котором будут данные элементы без концевых пробелов.
 */
$arr = [' a ', ' b ', ' с '];
$arr1 = array_map("trim", $arr);
var_dump($arr1);