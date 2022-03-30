<?php
/**
 * Дана таблица с именами. Имена могут повторятся, к примеру, есть 2 Маши. 
 * (1) Получите имена, которые повторяются только один раз. (2) Получите имена, которые повторяются более одного раза.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
//(1)
$query = $pdo->query(
    'SELECT COUNT(name) as count, girls.name FROM girls 
     GROUP BY girls.name HAVING COUNT(name) = 2'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(2)
$query = $pdo->query(
    'SELECT COUNT(name) as count, girls.name FROM girls 
     GROUP BY girls.name HAVING COUNT(name) > 2'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";