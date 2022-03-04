<?php
/**
 * 	Дан массив с элементами '<b>php</b>', '<i>html</i>'. Создайте новый массив, в котором из элементов будут удалены теги.
 */
$arr = ['<b>php</b>', '<i>html</i>'];
$arr1 = array_map("strip_tags", $arr);
var_dump($arr1);