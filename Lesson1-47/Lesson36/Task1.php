<?php
/**
 * Из таблицы workers достаньте записи со вторую, 3 штуки.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT * FROM workers LIMIT 1, 3'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $result[] = $row;
}
var_dump($result);