<?php
/**
 * Сделайте класс Sphere, который будет реализовывать интерфейс iSphere.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson32\Sphere;

$sphere = new Sphere(7);
echo $sphere->getVolume() . "-" . $sphere->getSquare();