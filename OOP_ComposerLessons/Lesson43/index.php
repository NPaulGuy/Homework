<?php
/**
 * Реализуйте описанный класс Interval. Проверьте его работу.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson43\Interval;
use \Lesson43\Date;

$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');

$interval = new Interval($date1, $date2);

echo $interval->toDays() . "<br>";
echo $interval->toMonths() . "<br>";
echo $interval->toYears() . "<br>";