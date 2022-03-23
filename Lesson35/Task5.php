<?php
/**
 * Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
// Начало транзакции
$query = $pdo->query(
    'BEGIN'
);
$query->fetch();
// Обновление данных
$query = $pdo->query(
    'UPDATE workers SET age = 23 WHERE workers.id > 2 
     AND workers.id <= 5'
);
$query->fetch();
// Проверка изменений
$query = $pdo->query(
    'SELECT workers.id, workers.name, workers.age FROM workers
     WHERE age = 23'
);
while ($row = $query->fetch()) {
    $result[] = $row;
}
var_dump($result);
$result = [];
echo "<br>";
// Откатываем изменения в таблице
$query = $pdo->query(
    'ROLLBACK'
);
$query->fetch();
//Проверяем таблицу до обновлений
$query = $pdo->query(
    'SELECT workers.id, workers.name, workers.age FROM workers
     WHERE age = 23'
);
while ($row = $query->fetch()) {
    $result[] = $row;
}
var_dump($result);