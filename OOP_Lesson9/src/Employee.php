<?php
namespace App;
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
    public function getSalary() : string 
    {
        return $this->salary . "$";
    }
    /**
     * @param string $name
     * 
     * @return Employee
     */
    public function setName(string $name) : Employee
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @param string $age
     * 
     * @return Employee
     */
    public function setAge(string $age) : Employee
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
        return $this;
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
    /**
     * @param int $age
     * 
     * @return bool
     */
    private function isAgeCorrect(int $age) : bool 
    {
        return ($age >= 1 && $age <=100);
    }
}