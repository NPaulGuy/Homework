<?php
/**
 * Реализуйте класс User по примеру автора. Реализуйте описанный класс Student с методами getCourse, setCourse, addOneYear.
 * Поля класса User должны быть с модификатором protected.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson19\Student;

$student = new Student("Andrey", 25, 4);
echo $student->setName('john')->setCourse(3)->setAge(20)->addOneYear()->getAge();
echo "<br>" . $student->getName() . "<br>" . $student->getCourse();