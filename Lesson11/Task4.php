<?php
/**
 * Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.
 */
function weekDay($weekDayNumber) {
    $week = [1 => 'понедельник', 'вторник','среда','четверг','пятница', 'суббота', 'воскресенье'];
    if ($weekDayNumber >= 1 && $weekDayNumber <= 7) {
        return $week[$weekDayNumber];
    } else {
        return false;
    }
}
echo weekDay(1);