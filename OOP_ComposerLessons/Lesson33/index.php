<?php
/**
 * Пусть у вас есть интерфейс iTest1 и нет интерфейса iTest2.
 * Проверьте, что выведет функция interface_exists для интерфейса iTest1 и для интерфейса iTest2. 
 * Выведите на экран список всех объявленных интерфейсов.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson33\iTest1;
use \Lesson33\Test1;

var_dump(interface_exists('Lesson33\iTest1'));
var_dump(interface_exists("Lesson33\iTest2"));
var_dump(get_declared_interfaces());