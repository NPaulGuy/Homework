<?php
/**
 * 	Пусть теперь в переменной $lang хранится язык (она принимает одно из значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня. 
 * Выведите словом день недели, соответствующий переменным $lang и $day. То есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'. 
 */
$lang = 'ru';
$day = 5;
$arr = [
    'ru' => [1 => 'понедельник', 'вторник','среда','четверг','пятница', 'суббота','воскресенье'],
    'en' => [1 => 'monday', 'tuesday','wednesday','thursday','friday', 'saturday','sunday']
];
echo $arr[$lang][$day];