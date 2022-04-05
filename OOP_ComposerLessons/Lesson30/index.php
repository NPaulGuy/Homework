<?php
/**
 * Сделайте так, чтобы класс Rectangle также реализовывал два интерфейса: и iFigure, и iTetragon.
 * Сделайте интерфейс iCircle с методами getRadius и getDiameter.
 * Сделайте так, чтобы класс Disk также реализовывал два интерфейса: и iFigure, и iCircle.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson30\Rectangle;
use \Lesson30\Disk;

$rectangle = new Rectangle(4, 6);
$disk = new Disk(12);
echo $rectangle->getSquare() . "-" . $rectangle->getPerimeter() . "<br>";
echo $disk->getRadius() . "-" . $disk->getDiameter() . "<br>";
echo $disk->getSquare() . "-" . $disk->getPerimeter();