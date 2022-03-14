<?php
/**
 * 	Найдите все счастливые билеты. Счастливый билет - это билет, в котором сумма первых трех цифр его номера равна сумме вторых трех цифр его номера. 
 */
/**
 * @return array
 */
function luckyTickets() : array {
    $tickets = [];
    for ($i = 100000; $i < 1000000; $i++) {
        $firstDigits = substr($i, 0, 3);
        $secondDigits = substr($i, 3);
        if (array_sum(str_split($firstDigits)) == array_sum(str_split($secondDigits))) {
            $tickets[] = $i;
        }
    }
    return $tickets;
}
var_dump(luckyTickets());
