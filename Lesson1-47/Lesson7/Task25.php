<?php
/**
 * Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.
 */
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
//sort
//sort($arr);
//rsort
//rsort($arr);
//arsort
//arsort($arr);
//ksort
//ksort($arr);
//krsort
//krsort($arr);
//usort
/*usort($arr, function($a, $b) {
    return $a >= $b;
});*/
//uasort
/*uasort($arr, function($a, $b) {
    return $a >= $b;
});*/
//uksort
/*uksort($arr, function($a, $b) {
    return $a >= $b;
});*/
//natsort
natsort($arr);
var_dump($arr);