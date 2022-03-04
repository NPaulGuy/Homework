<?php
/**
 * Создайте массив ['a'=>1, 'b'=2... 'z'=>26] не используя цикл. 
 */
$keys = range('a', 'z');
$values = range(1, 26);
$arr = array_combine($keys, $values);
var_dump($arr);