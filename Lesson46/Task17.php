<?php
/**
 * 	Найдите самый большой возраст по группам зарплат (для каждой зарплаты свой максимальный возраст).
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT MAX(workers.age), workers.salary FROM workers GROUP BY workers.salary'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}