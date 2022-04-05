<?php
/**
 * Сделайте интерфейс iUser с методами getName, setName, getAge, setAge.
 * Сделайте интерфейс iEmployee, наследующий от интерфейса iUser и добавляющий в него методы getSalary и setSalary.
 * Сделайте класс Employee, реализующий интерфейс iEmployee
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson28\Employee;

$employee = new Employee("Igor", 22, 2500);
echo $employee->setAge(25)->setName("Igorb")->getName() . "<br>";
echo $employee->setSalary(3000)->getAge() . "<br>";
echo $employee->getSalary();