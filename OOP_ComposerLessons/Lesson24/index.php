<?php
/**
 * Сделайте класс Disk (круг), реализующий интерфейс Figure.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson24\Disk;

$disk = new Disk(5.43);
echo $disk->setRadius(4.01)->getSquare() . "<br>";
echo $disk->getPerimeter();