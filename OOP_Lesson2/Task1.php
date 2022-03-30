<?php
/**
 * Реализовать класс User с методом show() : метод принимает параметром строку и добавляет в конец "!!!".
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
    public function show(string $str) : string
    {
        return $str . "!!!";
    }
}

$obj = new User('ivan', 22);
echo $obj->show("Kirov reporting");