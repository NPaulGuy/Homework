<?php
/**
 * 	Выберите из таблицы workers уникальные возраста так, чтобы для каждого возраста было поле res, в котором будут лежать через дефис id записей с таким возрастом.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT DISTINCT GROUP_CONCAT(workers.id SEPARATOR "-") 
     as res FROM workers GROUP BY workers.age'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}