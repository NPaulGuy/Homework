<?php
/**
 * Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели. 
 *
 */
$arr = [1 => 'понедельник', 'вторник','среда','четверг','пятница', 'суббота','воскресенье'];
$weekDayNumber = date("N");
echo $arr[$weekDayNumber];