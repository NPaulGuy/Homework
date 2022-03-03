<?php
/**
 * Найдите квадратный корень из 587. Округлите результат в большую и меньшую сторону, запишите результаты округления в ассоциативный массив с ключами 'floor' и 'ceil'.
 */
$num = 587;
$rootNum = sqrt($num);
$arr = [];
$arr['floor'] = floor($rootNum);
$arr['ceil'] = ceil($rootNum);
var_dump($arr);