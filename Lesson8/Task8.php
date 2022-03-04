<?php
/**
 * Дана строка. Сделайте заглавным последний символ этой строки не используя цикл
 */
$str = 'test another test one more';
$str = strrev($str);
$str = ucfirst($str);
$str = strrev($str);
echo $str;