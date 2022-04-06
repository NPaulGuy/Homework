<?php
/**
 * Пусть дан класс User c полями name и age, свойства которого доступны только для чтения с помощью геттеров.
 * Переделайте код этого класса так, чтобы вместо геттеров использовался магический метод __get.
 * Сделайте класс Date с публичными свойствами year, month и day.
 * С помощью магии сделайте свойство weekDay, которое будет возвращать день недели, соответствующий дате.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson40\User;
use \Lesson40\Date;

$user = new User("Oleg", 21);
echo $user->name . "_" . $user->age . "<br>";
$date = new Date(2002, 2, 55);
echo $date->weekDay . "<br>" . $date->year . '-' . $date->month . '-' . $date->day;