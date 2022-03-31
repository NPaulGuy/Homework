<?php
/**
 * Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
 * Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'john', возраст 25, зарплата 1000. 
 * Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'eric', возраст 26, зарплата 2000. 
 * Выведите на экран сумму зарплат созданных юзеров. 
 * Выведите на экран сумму возрастов созданных юзеров.
 */
/**
 * [Description Employee]
 */
class Employee 
{
    private string $name;
    private int $age;
    private int $salary;
    /**
     * @param string $name
     * @param int $age
     * @param int $salary
     */
    public function __construct(string $name, int $age, int $salary) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    /**
     * @return string
     */
    public function getName() : string 
    {
        return $this->name;
    }
    /**
     * @return int
     */
    public function getAge() : int 
    {
        return $this->age;
    }
    /**
     * @return int
     */
    public function getSalary() : int 
    {
        return $this->salary;
    }
}

$obj1 = new Employee('john', 25, 1000);
$obj2 = new Employee('eric', 26, 2000);
echo $obj1->getSalary() + $obj2->getSalary();
echo "<br>";
echo $obj1->getAge() + $obj2->getAge();

