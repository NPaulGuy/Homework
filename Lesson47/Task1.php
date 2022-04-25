<?php
/**
 * 	Пользователь, его город, страна. Запросы: (1) достать всех пользователей вместе с их городом и страной, (2) достать все города с их странами, (3) достать всех пользователей из страны Беларусь (без городов), (4) достать всех пользователей из города Минск (без страны), (5) вывести список стран с количеством пользователей в них.
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
//(1)
$query = $pdo->query(
    'SELECT people.name as user, country.name as country, town.name as town 
     FROM people LEFT JOIN town ON people.town_id = town.id
     LEFT JOIN country ON town.country_id = country.id'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(2)
$query = $pdo->query(
    'SELECT town.name as town, country.name as country
     FROM town LEFT JOIN country ON town.country_id = country.id
     ORDER BY country.name'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(3)
$query = $pdo->query(
    'SELECT people.name as user, country.name as country 
     FROM people LEFT JOIN town ON people.town_id = town.id
     LEFT JOIN country ON town.country_id = country.id 
     WHERE country.name = "Беларусь"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(4)
$query = $pdo->query(
    'SELECT people.name as user, town.name as town 
     FROM people LEFT JOIN town ON people.town_id = town.id
     WHERE town.name = "Минск"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(5)
$query = $pdo->query(
    'SELECT COUNT(*) as population, country.name as country 
     FROM people LEFT JOIN town ON people.town_id = town.id
     LEFT JOIN country ON town.country_id = country.id 
     GROUP BY country.name'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}