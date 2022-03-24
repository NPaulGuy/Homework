<?php
/**
 * 	В таблице pages найти строки, в которых есть слово "элемент" (искать только по колонке article).
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT * FROM pages WHERE article LIKE "%элемент%"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}