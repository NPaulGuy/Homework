<?php
/**
 * Удалите всех работников, у которых возраст 23 года. Верните таблицу workers в исходное состояние.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $pdo->query(
    'SELECT workers.name, workers.age FROM workers WHERE age=23'
);
while ($row = $query->fetch()) {
    $result[] = $row;
}
var_dump($result);
$result = [];
echo "<br>";
// Начало транзакции
$query = $pdo->query(
    'BEGIN'
);
$query->fetch();
// Удаление пользователей с возрастом 23 года
$query = $pdo->query(
    'DELETE FROM workers WHERE age = 23'
);
$query->fetch();
// Показываем, что пользователи удалены(должен быть пустой массив)
$query = $pdo->query(
    'SELECT workers.name, workers.age FROM workers WHERE age = 23'
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
// Проверяем, что откат изменений сработал
$query = $pdo->query(
    'SELECT workers.name, workers.age FROM workers WHERE age = 23'
);
while ($row = $query->fetch()) {
    $result[] = $row;
}
var_dump($result);