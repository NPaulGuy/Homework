<?php
/**
 * Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом трейте будет метод method, возвращающий 1, во втором трейте - одноименный метод, возвращающий 2, а в третьем трейте - одноименный метод, возвращающий 3.
 * Сделайте класс Test, использующий все три созданных нами трейта. Сделайте в этом классе метод getSum, возвращающий сумму результатов методов подключенных трейтов. 
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson35\Test;

$test = new Test();
echo $test->getSum();