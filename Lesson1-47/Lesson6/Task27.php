<?php
/**
 * Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
 */
$str = 'html css php';
$arr = explode(' ', $str); 
var_dump($arr);