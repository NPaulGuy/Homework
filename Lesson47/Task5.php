<?php
/**
 * Генеологическое дерево. Пользователь, его бабушки, дедушки, мама, папа, братья, сестры, дети. 
 * Можно найти любого родственника в любом колене (например, пра-пра-пра-дедушку). 
 * То есть есть пользователь, он может быть сыном, отцом, братом, дедушкой, прадедушкой и все это одновременно. 
 * Нужно хранить и получать родственные связи. Запросы: (1) получить отца пользователя, (2) получить мать пользователя, (3) получить детей пользователя, 
 * (4) получить сыновей пользователя, (5) получить дочерей пользователя, (6) получить внуков пользователя, (7) получить бабушек пользователя, 
 * (8) получить дедушек пользователя, (9) получить пра-пра-пра-дедушку пользователя, (10) получить братьев и сестер пользователя, 
 * (11) получить братьев пользователя, (12) получить дядь и теть пользователя, (13) получить кузенов и кузин пользователя.
 * Примечание: поле parent_id разделено на father_id и mother_id, чтобы была возможность для одного пользователя указать 2-ух родителей.
 * При этом поле sex позволяет простым запросом получить как детей по полу(сыновей, дочерей), так и родителей, прародителей(мам, пап, дедушек, бабушек).
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
//(1)
$query = $pdo->query(
    'SELECT father.name as fatherName, people.name as people_name FROM people LEFT JOIN people as father 
     ON people.father_id = father.id WHERE father.name IS NOT NULL'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(2)
$query = $pdo->query(
    'SELECT mother.name, people.name as people_name FROM people LEFT JOIN people as mother 
     ON people.mother_id = mother.id WHERE mother.name IS NOT NULL'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(3)
$query = $pdo->query(
    'SELECT child.name, people.name as people_name FROM people LEFT JOIN people as child 
     ON child.mother_id = people.id OR child.father_id = people.id WHERE child.name IS NOT NULL'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(4)
$query = $pdo->query(
    'SELECT child.name, people.name as people_name FROM people LEFT JOIN people as child 
     ON child.mother_id = people.id OR child.father_id = people.id WHERE child.name IS NOT NULL AND child.sex = "m"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(5)
$query = $pdo->query(
    'SELECT child.name, people.name as people_name FROM people LEFT JOIN people as child 
     ON child.mother_id = people.id OR child.father_id = people.id WHERE child.name IS NOT NULL AND child.sex = "f"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(6)
$query = $pdo->query(
    'SELECT grandchild.name, people.name as grandparent_name FROM people as grandchild LEFT JOIN people as child 
     ON grandchild.mother_id = child.id OR grandchild.father_id = child.id LEFT JOIN people 
     ON child.mother_id = people.id OR child.father_id = people.id
     WHERE people.name IS NOT NULL AND grandchild.sex = "m"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(7)
$query = $pdo->query(
    'SELECT grandmother.name, people.name as grandchild_name FROM people as grandmother LEFT JOIN people as parents 
     ON parents.mother_id = grandmother.id LEFT JOIN people
     ON people.mother_id = parents.id OR people.father_id = parents.id
     WHERE people.name IS NOT NULL AND grandmother.sex = "f"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(8)
$query = $pdo->query(
    'SELECT grandfather.name, people.name as grandchild_name FROM people as grandfather LEFT JOIN people as parents 
     ON parents.father_id = grandfather.id LEFT JOIN people
     ON people.mother_id = parents.id OR people.father_id = parents.id
     WHERE people.name IS NOT NULL AND grandfather.sex = "m"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(9)
$query = $pdo->query(
    'SELECT grand3father.name, people.name as grand3child_name FROM people as grand3father LEFT JOIN people as grand2father 
     ON grand2father.father_id = grand3father.id LEFT JOIN people as grandfather
     ON grandfather.father_id = grand2father.id LEFT JOIN people as father
     ON father.father_id = grandfather.id LEFT JOIN people 
     ON people.father_id = father.id
     WHERE people.name IS NOT NULL AND grand3father.sex = "m"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(10)
$query = $pdo->query(
    'SELECT DISTINCT people.name, neighboor.name as neighboorName FROM people
     LEFT JOIN people as neighboor ON people.father_id = neighboor.father_id AND people.mother_id = neighboor.mother_id
     WHERE people.id != neighboor.id'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(11)
$query = $pdo->query(
    'SELECT DISTINCT people.name, brother.name as brotherName FROM people
     LEFT JOIN people as brother ON people.father_id = brother.father_id AND people.mother_id = brother.mother_id
     WHERE people.id != brother.id AND brother.sex = "m" ORDER BY people.name'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(12): люди с id родителей = 0 - это не родственники. Подразумевается, что в БД нет данных о их родителях. 
// При этом, чтобы не дублировались родители в "дядях и тётях"(parentNeighboors), проверяется, что id родителей пользователей не совпадало с id дядь и тёть,
// как и id родителей пользователей и id родителей дядь и тёть, что приводит к получению родителей исходных пользователей
$query = $pdo->query(
    'SELECT DISTINCT people.name as people_name, parentNeighboors.name FROM people 
     LEFT JOIN people as parents ON people.father_id = parents.id OR people.mother_id = parents.id 
     LEFT JOIN people as parentNeighboors ON parents.father_id = parentNeighboors.father_id 
     WHERE parentNeighboors.name IS NOT NULL AND (people.father_id != parentNeighboors.id OR people.mother_id != parentNeighboors.id) 
     AND parents.father_id != 0 AND parents.id != parentNeighboors.id ORDER BY people.name'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(13)
$query = $pdo->query(
    'SELECT DISTINCT people.name as people_name, parentNeighboors.name as parentNeighboorsName, cousins.name as cousinName FROM people 
     LEFT JOIN people as parents ON people.father_id = parents.id OR people.mother_id = parents.id 
     LEFT JOIN people as parentNeighboors ON parents.father_id = parentNeighboors.father_id
     LEFT JOIN people as cousins ON cousins.father_id = parentNeighboors.id
     WHERE parentNeighboors.name IS NOT NULL AND (people.father_id != parentNeighboors.id OR people.mother_id != parentNeighboors.id) 
     AND parents.father_id != 0 AND parents.id != parentNeighboors.id AND cousins.name IS NOT NULL ORDER BY people.name'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";