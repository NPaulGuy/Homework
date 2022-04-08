<?php
/**
 * Добавьте в ваш класс Tag изменения в методе getAttrsStr, чтобы можно было внести параметры без значения(как disabled и т.д.). Проверьте его работу.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson49\Tag;

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
	->setAttr('disabled', true)
	->open();