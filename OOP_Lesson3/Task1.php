<?php
/**
 * Сделайте класс Employee, в котором будут следующие свойства - name, age, salary.
 * Сделайте в классе Employee метод getName, который будет возвращать имя работника.
 * Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
 * Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
 * Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.
 * Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.
 */
class Employee
{
    private string $name;
    private int $age;
    private int $salary;
    public function __construct(string $name, int $age, int $salary) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getName() : string 
    {
        return $this->name;
    }
    public function getAge() : int 
    {
        return $this->age;
    }
    public function getSalary() : int 
    {
        return $this->salary;
    }
    public function show(string $str) : string
    {
        return $str . "!!!";
    }
    public function checkAge() : bool 
    {
        return $this->age > 18;
    }
}

$obj1 = new Employee('oleg', 16, 1500);
$obj2 = new Employee('sergey', 19, 2000);
var_dump($obj1->checkAge());
echo "<br>";
echo $obj1->getName() . " - " . $obj1->getSalary() . "<br>";
echo $obj2->getName() . " - " . $obj2->getSalary() . "<br>";
echo "Sum is " . ($obj1->getSalary() + $obj2->getSalary());