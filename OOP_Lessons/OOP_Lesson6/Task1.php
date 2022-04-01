<?php
/**
 * Сделайте класс Employee, в котором будут следующие публичные свойства - name, age, salary. 
 * Сделайте так, чтобы эти свойства заполнялись в конструкторе при создании объекта.
 * Создайте объект класса Employee с именем 'eric', возрастом 25, зарплатой 1000. 
 * Создайте объект класса Employee с именем 'kyle', возрастом 30, зарплатой 2000.
 * Выведите на экран сумму зарплат созданных вами юзеров.
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

$obj1 = new Employee('eric', 25, 1000);
$obj2 = new Employee('kyle', 30, 2000);
echo $obj1->getSalary() + $obj2->getSalary();
echo "<br>";