<?php
/**
 * Из таблицы workers достаньте работников со второго по шестого и отсортируйте их по возрастанию возраста
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT * FROM workers ORDER BY age LIMIT 1, 5'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}