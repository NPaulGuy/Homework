<?php
/**
 * Используя реализованные класс Employee и интерфейс iProgrammer автора, реализуйте класс Programmer.
 * Класс должен наследоваться от Employee и реализовывать iProgrammer.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson31\Programmer;

$programmer = new Programmer("Vasya", 2500, ['php', 'js', 'ruby']);
var_dump($programmer->addLang("html")->getLangs());
echo "<br>" . $programmer->getName() . "-" . $programmer->getSalary();