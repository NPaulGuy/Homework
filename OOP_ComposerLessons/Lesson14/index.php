<?php
/**
 * Сделайте класс User с полями name, age. Добавьте геттеры-сеттеры, конструктор.
 * Пусть массив $methods будет ассоциативным с ключами method1 и method2:
 * $methods = ['method1' => 'getName', 'method2' => 'getAge'];
 * Выведите имя и возраст пользователя с помощью этого массива.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson14\User;

$obj = new User('Oleg', 33);
$methods = [
    'method1' => 'getName', 
    'method2' => 'getAge'
];
for ($i = 1; $i < count($methods) + 1; $i++) {
    echo $obj->{$methods["method$i"]}() . "<br>";
}