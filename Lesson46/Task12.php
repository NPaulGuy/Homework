<?php
/**
 * 	При выборке из таблицы workers прибавьте к дате 1 день и отнимите 2 часа, 3 минуты.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT (workers.date + INTERVAL 1 DAY - INTERVAL "2_3" HOUR_MINUTE)
     as userDate FROM workers'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}