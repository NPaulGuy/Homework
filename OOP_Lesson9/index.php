<?php
require __DIR__ . '/vendor/autoload.php';
use \Class\Employee;
use \Class\User;
/**
 * Сделайте несколько классов в разных файлах. Подключите ваши классы к файлу index.php. 
 */
require_once "Employee.php";
require_once "User.php";
$employee = new Employee("john", 22, 3000);
$user = new User("Karlo", 12);
echo $employee->getSalary() . "<br>";
echo $user->addAge(15)->getAge();