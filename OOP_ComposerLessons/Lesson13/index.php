<?php
/**
 * Сделайте класс City, в котором будут следующие свойства: name, foundation(дата основания), population (количество населения).
 * Создайте объект этого класса. Пусть дана переменная $props, в которой хранится массив названий свойств класса City. 
 * Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств. 
 * Скопируйте авторский код класса User и массив $props. В примере автора на экран выводится фамилия юзера. Выведите еще и имя, и отчество. 
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson13\City;
use \Lesson13\User;

$obj = new City('Minsk', '1321-02-27', 1200000);
$props = ['name', 'foundation', 'population'];
foreach ($props as $prop) {
    echo "$prop: " . $obj->getField($prop) . "<br>";
}
$user = new User('Иванов', 'Иван', 'Иванович');
	
$props = ['surname', 'name', 'patronymic'];
for ($i = 0; $i < count($props); $i++) {
    echo $user->getField($props[$i]) . " ";
}