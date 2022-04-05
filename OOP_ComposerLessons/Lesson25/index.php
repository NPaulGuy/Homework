<?php
/**
 * Реализуйте класс FiguresCollection по образцу автора.
 * Добавьте в класс FiguresCollection метод getTotalPerimeter для нахождения суммарного периметра всех фигур.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson25\FiguresCollection;
use \Lesson25\Disk;

$obj = new FiguresCollection();
$obj->addFigure(new Disk(4.33));
$obj->addFigure(new Disk(5.785));
$obj->addFigure(new Disk(11.25));
echo $obj->getTotalSquare() . "<br>";
echo $obj->getTotalPerimeter() . "<br>";