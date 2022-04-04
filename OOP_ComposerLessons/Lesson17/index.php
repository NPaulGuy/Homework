<?php
/**
 * Напишите реализацию методов класса ArrayAvgHelper.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson17\ArrayAvgHelper;

$arrayAvgHelper = new ArrayAvgHelper;
$arr = [1.53, 6.33, 8.64, 3.45];
echo $arrayAvgHelper->getAvg1($arr) . "<br>";
echo $arrayAvgHelper->getAvg2($arr) . "<br>";
echo $arrayAvgHelper->getAvg3($arr) . "<br>";
echo $arrayAvgHelper->getAvg4($arr) . "<br>";