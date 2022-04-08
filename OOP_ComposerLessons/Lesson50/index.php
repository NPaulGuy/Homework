<?php
/**
 * Добавьте в ваш класс Tag методы addClass и removeClass. Проверьте их работу.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson50\Tag;

$label = new Tag('label');
$input = new Tag('input');
/* [
	'type' => 'password', 
	'placeholder' => 'password'
]*/
echo $label->open() . "Пароль:" . $label->close() . "<br>";
echo $input
	->setAttrs(['type' => 'password', 'placeholder' => 'password'])
	->setAttr('class', 'pass inputs strings')
	->addClass('someClass')
	->removeClass('strings')
	->open();