<?php
/**
 * Сделайте класс City, в котором будут следующие свойства: name, population (количество населения).
 * Создайте 5 объектов класса City, заполните их данными и запишите в массив. 
 * Переберите созданный вами массив с городами циклом и выведите города и их население на экран.
 */
require_once "City.php";
$employee = new City("Bobryisk", 500000);
$cities = [
    new City("Bobryisk", 350000),
    new City("Minsk", 1200000),
    new City("Mogilev", 1000000),
    new City("Vitebsk", 900000),
    new City("Krasnoye", 45000)
];
foreach ($cities as $city) {
    echo $city->getName() . " - " . $city->getPopulation() . "<br>";
}