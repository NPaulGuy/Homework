<?php
/**
 * Реализуйте описанный класс Date. Проверьте его работу.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson42\Date;

$date = new Date('2025-12-31');
echo $date->getYear() . "<br>"; 
echo $date->getMonth() . "<br>";
echo $date->getDay() . "<br>";
echo $date->getWeekDay() . "<br>";
echo $date->getWeekDay('ru') . "<br>";
echo $date->getWeekDay('en') . "<br>";
echo (new Date('2025-12-31'))->addYear(1) . "<br>";
echo (new Date('2025-12-31'))->addDay(1) . "<br>";
echo (new Date('2025-12-31'))->subDay(3)->addYear(1) . "<br>";