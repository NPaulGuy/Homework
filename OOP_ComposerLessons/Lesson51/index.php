<?php
/**
 * Класс Tag: Реализуйте геттер getName, возвращающий название нашего тега (то есть значение свойства name).
 * Реализуйте геттер getText, возвращающий текст нашего тега (то есть значение свойства text).
 * Реализуйте геттер getAttrs, возвращающий массив всех атрибутов тега (то есть значение свойства attrs). 
 * Реализуйте геттер getAttr, параметром принимающий имя атрибута и возвращающий значение этого атрибута (а если такого атрибута нет - то null).
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson51\Tag;

$label = new Tag('label');
$input = new Tag('input');
echo $label->open() . "Пароль:" . $label->close() . "<br>";
echo $input
	->setAttrs(['type' => 'password', 'placeholder' => 'password'])
	->setAttr('class', 'pass inputs strings')
	->addClass('someClass')
	->removeClass('strings')
	->open();
echo "<br>" . $input->getName() . "->" . $input->getText() . "<-<br>";
echo $input->getAttr('class') . "<br>";
var_dump($input->getAttrs());