<?php
/**
 * Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году.
 */
$now = time();
$newYear = mktime(0, 0, 0, 1, 1, date("Y") + 1);
/**
 *  Время в секундах, находим разность и делим на 24 часа в сутках, 
 *  60 минут в часе и 60 секунд в минуте. Floor помогает показал кол-во полных дней.
 */ 
echo floor(($newYear - $now) / (24 * 60 * 60));