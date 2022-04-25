<?php
/**
 * 	Есть мужья и жены, а также неженатые/незамужние. Для всех указывается имя, фамилия, возраст, адрес. 
 *  Муж с женой имеют одну фамилию и живут по одному адресу. Запросы: (1) получить мужей с женами и наоборот, 
 *  (2) получить холостых, (3) получить семьи (муж+жена), семьи не должны дублироваться (пара должна быть только 1 раз)
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
//(1) - мужья с жёнами
$query = $pdo->query(
    'SELECT husband.name as husbandName, wife.name as wifeName FROM married_people as husband
     LEFT JOIN married_people as wife  ON husband.pair_id=wife.id WHERE husband.sex = "m" AND husband.pair_id IS NOT NULL'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(1) - жёны с мужьями
$query = $pdo->query(
    'SELECT  wife.name as wifeName, husband.name as husbandName FROM married_people as wife
     LEFT JOIN married_people as husband  ON wife.pair_id=husband.id WHERE wife.sex = "f" AND wife.pair_id IS NOT NULL'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(2)
$query = $pdo->query(
    'SELECT * FROM married_people WHERE pair_id IS NULL'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(3) - аналогичен запросу (1)
$query = $pdo->query(
    'SELECT husband.name as husbandName, wife.name as wifeName FROM married_people as husband
     LEFT JOIN married_people as wife  ON husband.pair_id=wife.id WHERE husband.sex = "m" AND husband.pair_id IS NOT NULL'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";