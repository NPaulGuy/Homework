<?php
/**
 * Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.
 */
$str = '1234567890';
var_dump(str_split($str, 2));