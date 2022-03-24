<?php
/**
 * 	Найдите в таблице workers суммарную зарплату для id, равного 1, 2, 3 и 5
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT SUM(workers.salary) FROM workers
     WHERE workers.id IN (1, 2, 3, 5)'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}