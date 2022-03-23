<?php
/**
 * Выбрать работников с зарплатой равной или меньшей 900$.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $pdo->query('SELECT workers.name FROM workers WHERE salary <= 900');
while ($row = $query->fetch()) {
    $result[] = $row;
}
var_dump($result);