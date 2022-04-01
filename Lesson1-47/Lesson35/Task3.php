<?php
/**
 * Добавьте двух новых работников одним запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
/*$query = $pdo->query(
    'INSERT INTO workers (name, age, salary) 
     VALUES ("Ярослава", 30, 1200), ("Петр", 31, 1000)'
);*/
#$query->fetch();
$query = $pdo->query(
    'SELECT * FROM workers'
);
while ($row = $query->fetch()) {
    $result[] = $row;
}
var_dump($result);