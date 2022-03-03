<?php
/**
 * Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru. 
 * $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
 */
$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
$en = [];
$ru = [];
foreach ($arr as $key => $elem) {
    $en[] = $key;
    $ru[] = $elem;
}
//var_dump($en);
var_dump($ru);