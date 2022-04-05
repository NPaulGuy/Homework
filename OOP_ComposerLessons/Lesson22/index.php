<?php
/**
 * Сделайте класс Product, в котором будут следующие свойства: name, price.
 * Создайте объект класса Product, запишите его в переменную $product1.
 * Присвойте значение переменной $product1 в переменную $product2. Проверьте то, что обе переменные ссылаются на один и тот же объект. 
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson22\Product;

$product1 = new Product("Apple", 250);
$product2 = $product1;
echo $product1->setPrice(500)->getPrice() . "<br>";
echo $product2->getPrice();