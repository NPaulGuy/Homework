<?php
/**
 * Сделайте класс User, в котором будут следующие свойства - name и age.
 * Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
 * Создайте объект класса User с именем 'john' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.
 * Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.
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
     * @return User Метод возвращает объект класса, чтобы был доступ для "цепочного" вызова методов. Пример: $obj->setAge(13)->getAge();
     */
    public function setAge(int $age) : User
    {
        if ($age > 18) {
            $this->age = $age;
        }
        return $this;
    }
}

$obj1 = new User('john', 25);
echo $obj1->getAge() . "<br>";
$obj1->setAge(30);
echo $obj1->getAge() . "<br>";
$obj1->setAge(11);
echo $obj1->getAge();
