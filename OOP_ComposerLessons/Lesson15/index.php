<?php
/**
 * Реализуйте класс Arr с полем numbers, конструктором, методами add и getSum.
 * Вызовите метод getSum сразу после создания объекта.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson15\Arr;

echo (new Arr([4, 8, 12]))->getSum() + (new Arr([11, 25, 12]))->getSum(); 