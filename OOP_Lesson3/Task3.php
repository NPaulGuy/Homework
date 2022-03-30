<?php
/**
 * Сделайте класс Employee, в котором будут следующие свойства работника - name, salary. Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
 * Сделайте класс Rectangle, в котором в свойствах будут записаны ширина и высота прямоугольника.
 * В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника. 
 * В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника. 
 */
/**
 * [Description Employee]
 */
class Employee
{
    private string $name;
    private int $salary;
    /**
     * @param string $name
     * @param int $salary
     */
    public function __construct(string $name, int $salary) 
    {
        $this->name = $name;
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
    public function getSalary() : int 
    {
        return $this->salary;
    }
    /**
     * @return Employee
     */
    public function doubleSalary() : Employee 
    {
        $this->salary *= 2;
        return $this;
    }
}
/**
 * [Description Rectangle]
 */
class Rectangle 
{
    private int $width;
    private int $height;
    /**
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height) 
    {
        $this->width = $width;
        $this->height = $height;
    }
    /**
     * @return string
     */
    public function getWidth() : string 
    {
        return $this->width;
    }
    /**
     * @return string
     */
    public function getHeight() : string 
    {
        return $this->height;
    }
    /**
     * @return int
     */
    public function getSquare() : int 
    {
        return ($this->width * $this->height);
    }
    /**
     * @return int
     */
    public function getPerimeter() : int 
    {
        return (2 * ($this->width + $this->height));
    }
}
$obj1 = new Employee('john', 750);
echo $obj1->getSalary() . "<br>";
echo $obj1->doubleSalary()->getSalary() . "<br>";
$obj2 = new Rectangle(15, 22);
echo $obj2->getSquare() . "; " . $obj2->getPerimeter();
