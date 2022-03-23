<?php
/**
 * Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $pdo->query('SELECT * FROM workers WHERE age = 27 AND salary != 900');
while ($row = $query->fetch()) {
    $result[] = $row;
}
var_dump($result);