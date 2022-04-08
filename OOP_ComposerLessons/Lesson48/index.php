<?php
/**
 * Добавьте в ваш класс Tag описанный метод setAttrs. Проверьте его работу.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson48\Tag;

$label = new Tag('label');
$input = new Tag('input');
/* [
	'type' => 'password', 
	'placeholder' => 'password'
]*/
echo $label->open() . "Пароль:" . $label->close() . "<br>";
echo $input
	->setAttrs(['type' => 'password', 'placeholder' => 'password'])
	->setAttr('value', '12345678')
	->removeAttr('value')
	->open();