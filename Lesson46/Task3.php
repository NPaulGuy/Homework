<?php
/**
 * 	Выберите из таблицы workers все записи так, чтобы вместо id было userId, вместо login – userLogin, вместо salary - userSalary
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT workers.id as userId, workers.name as userLogin,
     workers.salary as userSalary FROM workers'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}