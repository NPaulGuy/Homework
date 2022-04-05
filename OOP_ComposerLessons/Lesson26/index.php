<?php
/**
 * Дан интерфейс iUser c набором методов. 
 * Сделайте класс User, который будет реализовывать данный интерфейс.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson26\User;

$obj = new User("Kolya", 34);
echo $obj->getName() . "<br>";
echo $obj->setName("Valentin")->getName() . "<br>";
echo $obj->setAge(22)->getAge() . "<br>";