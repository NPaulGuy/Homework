<?php
/**
 * Дана строка с числами '1234567890'. Найдите сумму пар чисел: 12+34+56+78+90. Решите задачу, не используя цикл
 */
$str = '1234567890';
$arr = str_split($str, 2);
echo array_sum($arr);