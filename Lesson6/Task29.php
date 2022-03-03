<?php
/**
 * В переменной $date лежит дата в формате '2013-12-31'. 
 * Преобразуйте эту дату в формат '31.12.2013'
 */
$date = '2013-12-31';
$arr = explode('-', $date);
$arr = array_reverse($arr);
echo implode('.', $arr);