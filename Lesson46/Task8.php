<?php
/**
 * 	Вставьте в таблицу workers запись с полем date с текущей датой в формате 'год-месяц-день'
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'INSERT INTO workers SET name = "Арсений",
     age = 27, salary = 700, date = CURRENT_DATE(),
     description = "TASK8"'
);
$query->fetch();
$query = $pdo->query(
    'SELECT workers.name, workers.date, workers.description 
     FROM workers'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}