<?php
/**
 * Пусть дан класс User с геттерами и сеттерами свойств name и age.
 * Переделайте код этого класса так, чтобы вместо геттеров и сеттеров использовались магический методы __get и __set
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson41\User;

$user = new User("Andrey", 25);
$user->name = 'Kolya';
$user->age = 18;
$user->salary = 2500;
echo $user->name . "-" . $user->age . "-" . $user->salary;