<?php
/**
 * Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary.
 * Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.
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
    public function getSalary() : string 
    {
        return $this->salary . "$";
    }
    /**
     * @param string $salary
     * 
     * @return Employee
     */
    public function setSalary(string $salary) : Employee
    {
        $this->salary = $salary;
        return $this;
    }
}

$obj1 = new Employee('eric', 25, 1000);
$obj2 = new Employee('kyle', 30, 2000);
echo $obj1->getAge();
echo "<br>" . $obj2->getSalary();
echo "<br>";