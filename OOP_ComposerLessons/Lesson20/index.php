<?php
/**
 * Модифицируйте код класса User так, чтобы в методе setName выполнялась проверка того, что длина имени более 3-х символов.
 * Добавьте в класс Student метод setName, в котором будет выполняться проверка того, что длина имени более 3-х символов и менее 10 символов. Пусть этот метод использует метод setName своего родителя, чтобы выполнить часть проверки.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson20\Student;

$student = new Student("An", 25, 4);
echo $student->getName() . "<br>";
echo $student->setName("Valdemar_es_tur_Vankovski")->getName() . "<br>";
echo $student->setName("Valdemar")->getName();
