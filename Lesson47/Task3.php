<?php
/**
 * Море, реки, притоки (притоки делятся на правые и левые). Реки могут быть притоками других рек или впадать прямо в море. 
 * Запросы: (1) получить все реки Черного Моря, (2) получить все реки Черного Моря вместе с притоками, (3) получить все притоки реки Днепр, 
 * (4) получить куда впадает данная река (в какую реку или в какое море).
 * Примечание: создана таблица "Водоёмы" с полем "type", определяющее, река это или море. Также есть поле enter_id, определяющее, куда впадает водоём. 
 * Если никуда не впадает, то enter_id = NULL
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
//(1)
$query = $pdo->query(
    'SELECT river.name as riverName FROM waterpools as river 
     LEFT JOIN waterpools ON river.enter_id = waterpools.id
     WHERE waterpools.name = "Черное море"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(2)
$query = $pdo->query(
    'SELECT subRiver.name as subRiverName, river.name as riverName FROM waterpools as subRiver
     LEFT JOIN waterpools as river ON subRiver.enter_id = river.id
     LEFT JOIN waterpools ON river.enter_id = waterpools.id
     WHERE waterpools.name = "Черное море"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(3)
$query = $pdo->query(
    'SELECT subRiver.name as subRiverName FROM waterpools as subRiver
     LEFT JOIN waterpools as river ON subRiver.enter_id = river.id
     WHERE river.name = "Днепр"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(4)
$query = $pdo->query(
    'SELECT river.name as riverName, waterpools.name as entered_pool FROM waterpools as river
     LEFT JOIN waterpools ON river.enter_id = waterpools.id
     WHERE river.enter_id IS NOT NULL'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";