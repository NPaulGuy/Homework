<?php
/**
 * 	Даны 3 таблицы: таблица category с полями id и name, таблица sub_category с полями id и name и таблица page с полями id, name и sub_category_id. 
 *  Достаньте одним запросом все страницы вместе с их подкатегориями и категориями.
 *  Примечание: По условию нет внешнего ключа в таблице sub_category для связи с category, поэтому добавим поле category_id!
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
$query = $pdo->query(
    'SELECT category.name as category, sub_category.name as subCategory,
     pages.article as pageName FROM pages 
     LEFT JOIN sub_category ON pages.sub_category_id=sub_category.id
     LEFT JOIN category ON sub_category.category_id=category.id'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}