<?php
/**
 * Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. 
 * Если это так - выведите 'да', в противном случае выведите 'нет'. 
 */
$str = "794302";
$firstDigitGroup = $str[0] + $str[1] + $str[2];
$secondDigitGroup = $str[3] + $str[4] + $str[5];
if ($firstDigitGroup === $secondDigitGroup) {
    echo "да";
} else {
    echo "нет";
}