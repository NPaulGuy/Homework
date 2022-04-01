<?php
/**
 * 	Выберите из таблицы workers записи с id равным 1, 2, 3, 7, 9, и логином, равным 'user', 'admin', 'ivan' и зарплатой больше 300
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT * FROM workers WHERE id IN (1, 2, 3, 7, 9)
    AND name IN ("user", "admin", "Иван")
    AND salary > 300'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}