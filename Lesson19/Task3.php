<?php
/**
 * 	Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. И так, пока сумма не станет однозначным числом (9 и менее).
 */
function sumDigitsToOne(int $num) : int {
    while ($num > 9) {
        $arr = str_split($num);
        $num = array_sum($arr);
    }
    return $num;
}
echo sumDigitsToOne(199);