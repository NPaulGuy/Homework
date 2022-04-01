<?php
/**
 * Дано число. Найдите сумму цифр этого числа не используя цикл.
 */
$num = 123;
$arr = str_split($num);
echo array_sum($arr);