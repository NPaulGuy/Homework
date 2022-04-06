<?php
/**
 * Реализуйте класс Country со свойствами name, age, population и геттерами для них. Пусть наш класс для сокращения своего кода использует уже созданный нами трейт Helper.
 * Сделайте 3 трейта с названиями Trait1, Trait2 и Trait3. Пусть в первом трейте будет метод method1, возвращающий 1, во втором трейте - метод method2, возвращающий 2, а в третьем трейте - метод method3, возвращающий 3. Пусть все эти методы будут приватными.
 * Сделайте класс Test, использующий все три созданных нами трейта. Сделайте в этом классе публичный метод getSum, возвращающий сумму результатов методов подключенных трейтов.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson34\Country;
use \Lesson34\Test;

$country = new Country("Belarus", 24, 10000000);
echo $country->getName() . "-" . $country->getAge() . "-" . $country->getPopulation();
$test = new Test();
echo "<br>" . $test->getSum();
