<?php
/**
 * 	Даны две таблицы: таблица category и таблица sub_category с полями id и name. Достаньте одним запросом названия категорий и подкатегорий.
 *  Примечание: чтобы не создавать дополнительные таблицы, задание выполняется с таблицами workers и users, имеющими поля id и name.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT workers.name as name FROM workers
     UNION SELECT users.name FROM users'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}