<?php
/**
 * Реализуйте описанный класс Tag. Проверьте его работу.
 * Создайте с помощью класса Tag тег <img> и выведите его на экран.
 * Создайте с помощью класса Tag тег <header> и выведите его на экран с текстом 'header сайта'.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson45\Tag;
echo (new Tag('html'))->open();
$header = new Tag('header');
echo $header->open() . 'header сайта' . $header->close();
$img = new Tag('img');
echo $img->open() . 'image is here' . $img->close();
echo (new Tag('html'))->close();