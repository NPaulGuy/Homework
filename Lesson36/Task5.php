<?php
/**
 * 	В таблице workers найти строки, в которых возраст работника начинается с числа 3, а далее идет только одна цифра.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT * FROM workers WHERE age LIKE "3_"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}