<?php
/**
 * 	При выборке из таблицы workers запишите год, месяц и день в отдельные поля с помощью EXTRACT
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT EXTRACT(YEAR FROM workers.date) as year,
     EXTRACT(MONTH FROM workers.date) as month,
     EXTRACT(DAY FROM workers.date) as day
     FROM workers'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}