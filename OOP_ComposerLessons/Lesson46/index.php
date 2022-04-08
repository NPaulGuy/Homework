<?php
/**
 * Добавьте в класс Tag из предыдущего урока возможноть добавлять атрибуты тегов.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson46\Tag;

$label = new Tag('label');
$input = new Tag('input', [
	'type' => 'password', 
	'placeholder' => 'password'
]);
echo $label->open() . "Пароль:" . $label->close() . "<br>";
echo $input->open();