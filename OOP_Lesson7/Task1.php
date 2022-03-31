<?php
/**
 * Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary.
 * Сделайте геттеры и сеттеры для всех свойств класса Employee. 
 * Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет). 
 * Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).
 * Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара. 
 * Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.
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
    private function isAgeCorrect(int $age) : bool 
    {
        return ($age >= 1 && $age <=100);
    }
}

$obj1 = new Employee('eric', 25, 1000);
$obj2 = new Employee('kyle', 30, 2000);
echo $obj1->setAge(75)->setAge(102)->getAge();
echo "<br>" . $obj2->getSalary();
echo "<br>";