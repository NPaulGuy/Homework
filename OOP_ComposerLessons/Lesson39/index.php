<?php
/**
 * Сделайте класс User, в котором будут следующие свойства - name, surname, patronymic. Сделайте так, чтобы при выводе объекта через echo на экран выводилось ФИО пользователя.
 * Реализуйте класс Arr, используя метод __toString() для вывода суммы массива.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson39\User;
use \Lesson39\Arr;

$user = new User("Гжегож", "Бженчишчикевич", "Зенонович");
$arr = new Arr([1, 6, 8, 12, 22]);
echo $user . "<br>" . $arr;