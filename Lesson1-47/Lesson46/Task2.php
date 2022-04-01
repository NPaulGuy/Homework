<?php
/**
 * 	Выберите из таблицы workers записи c id от 3 до 10 и зарплатой от 300 до 500
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT * FROM workers WHERE id BETWEEN 3 AND 10
    AND salary BETWEEN 300 AND 500'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}