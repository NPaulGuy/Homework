<?php
/**
 * Самостоятельно добавьте метод setAttr в созданный вами в предыдущем уроке класс Tag.
 * Реализуйте метод removeAttr, который будет удалять переданный параметром атрибут. Сделайте так, чтобы этот метод также мог принимать участие в цепочке.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson47\Tag;

$label = new Tag('label');
$input = new Tag('input');
/* [
	'type' => 'password', 
	'placeholder' => 'password'
]*/
echo $label->open() . "Пароль:" . $label->close() . "<br>";
echo $input
	->setAttr('type', 'password')
	->setAttr('placeholder', 'password')
	->setAttr('value', '12345678')
	->removeAttr('value')
	->open();