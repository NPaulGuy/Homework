<?php
/**
 * 	При выборке из таблицы workers создайте новое поле res, в котором будет лежать среднее арифметическое зарплаты и возраста
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT (workers.salary + workers.age) / 2 as res FROM workers'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}