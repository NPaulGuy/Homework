<?php
/**
 * 	При выборке из таблицы workers создайте новое поле avg, в котором будет лежать деленная на 2 разница между максимальным значением возраста и минимальным значением возраста в во всей таблице.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT (MAX(workers.age) - MIN(workers.age)) / 2 
     as avg FROM workers'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}