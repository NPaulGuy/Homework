<?php
/**
 * Сделайте класс User c полями name, age. Добавьте методы setAge, addAge(добавить возраст пользователю), 
 * isAgeCorrect(проверить возраст от 18 включительно до 60 включительно). Сделайте поля класса приватными.
 * Попробуйте вызвать метод isAgeCorrect снаружи класса. Убедитесь, что это будет вызывать ошибку. 
 */
class User
{
    private string $name;
    private int $age;
    public function __construct(string $name, int $age) 
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getName() : string 
    {
        return $this->name;
    }
    public function getAge() : int 
    {
        return $this->age;
    }
    private function isAgeCorrect(int $age) : bool 
    {
        if (isset($age)) {
            return ($age >= 18 && $age <= 60);
        } else {
            return ($this->age >= 18 && $this->age <= 60);
        }

    }
    public function setAge(int $age) : User 
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
        return $this;
    }
    public function addAge(int $years) : User 
    {
        if($this->isAgeCorrect($this->age + $years)) {
            $this->age += $years;
        }
        return $this;
    }
    public function subAge(int $years) : User 
    {
        if($this->isAgeCorrect($this->age - $years)) {
            $this->age -= $years;
        }
        return $this;
    }
}
//var_dump(isAgeCorrect()); // Ошибка!
