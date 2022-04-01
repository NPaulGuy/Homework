<?php
/**
 * Сделайте класс User c полями name, age. Добавьте методы setAge, addAge(добавить возраст пользователю), 
 * isAgeCorrect(проверить возраст от 18 включительно до 60 включительно).
 * Создайте объект этого класса User проверьте работу методов setAge и addAge.
 * Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет.
 */
/**
 * [Description User]
 */
class User
{
    private string $name;
    private int $age;
    /**
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age) 
    {
        $this->name = $name;
        $this->age = $age;
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
     * @param int $age
     * 
     * @return bool
     */
    private function isAgeCorrect(int $age) : bool 
    {
        if (isset($age)) {
            return ($age >= 18 && $age <= 60);
        } else {
            return ($this->age >= 18 && $this->age <= 60);
        }
        
    }
    /**
     * @param int $age
     * 
     * @return User
     */
    public function setAge(int $age) : User 
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
        return $this;
    }
    /**
     * @param int $years
     * 
     * @return User
     */
    public function addAge(int $years) : User 
    {
        if($this->isAgeCorrect($this->age + $years)) {
            $this->age += $years;
        }
        return $this;
    }
    /**
     * @param int $years
     * 
     * @return User
     */
    public function subAge(int $years) : User 
    {
        if($this->isAgeCorrect($this->age - $years)) {
            $this->age -= $years;
        }
        return $this;
    }
}
$obj1 = new User('kirill', 19);
echo $obj1->setAge(24)->getAge() . "<br>";
echo $obj1->addAge(5)->getAge() . "<br>";
echo $obj1->subAge(10)->getAge() . "<br>";
