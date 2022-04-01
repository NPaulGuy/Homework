<?php
/**
 * Сделайте несколько классов в разных файлах. Подключите ваши классы к файлу index.php. 
 */
require __DIR__ . '/vendor/autoload.php'; 
use \App\Employee as Employee;
use \App\User as User;

$employee = new Employee("john", 22, 3000);
$user = new User("Karlo", 12);
echo $employee->getSalary() . "<br>";
echo $user->addAge(15)->getAge();