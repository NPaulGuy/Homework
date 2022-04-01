<?php
/**
 * 	При выборке из таблицы workers создайте новое поле res, в котором будут лежать одновременно зарплата и возраст через дефис.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT CONCAT_WS("-", workers.salary, workers.age) 
     as res FROM workers'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}