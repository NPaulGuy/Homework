<?php
/**
 * Реализуйте класс Arr с полем numbers, конструктором, методами add,getSum и push.
 * Реализуйте возможность использовать цепочки методов.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson16\Arr;

echo (new Arr([]))->add(3)->add(5)->push([12, 22])->getSum();