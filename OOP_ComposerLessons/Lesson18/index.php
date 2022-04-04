<?php
/**
 * Реализуйте классы User, Employee, Student. Employee и Student наследуются от User.
 * Сделайте класс Programmer, который будет наследовать от класса Employee. Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.
 * Сделайте класс Driver (водитель), который будет наследовать от класса Employee. Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним. 
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson18\Student;
use \Lesson18\Programmer;
use \Lesson18\Driver;

$student = new Student("Stepan", 19, 4);
echo $student->setCourse(2)->getCourse() . "<br>";
echo $student->setName("Gregory")->getName() . "<br>";
$programmer = new Programmer("Vitya", 22, 2500, ['en', 'ru']);
var_dump($programmer->getLangs());
echo "<br>" . $programmer->getSalary() . "<br>";
$driver = new Driver("Petro", 31, 1500, 11, 'C');
echo $driver->setCategory('B')->getCategory() . "<br>";
echo $driver->getAge();