<?php
/**
 * Смените типа поля salary с int на varchar(255).
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'ALTER TABLE workers MODIFY salary VARCHAR(255)'
);
$query->fetch();
$query = $pdo->query(
    'DESCRIBE workers'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}