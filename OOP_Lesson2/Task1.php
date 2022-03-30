<?php
/**
 * Реализовать класс User с методом show() : метод принимает параметром строку и добавляет в конец "!!!".
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
     * @param string $str
     * 
     * @return string
     */
    public function show(string $str) : string
    {
        return $str . "!!!";
    }
}

$obj = new User('ivan', 22);
echo $obj->show("Kirov reporting");