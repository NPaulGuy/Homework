<?php
/**
 * Пользователь, страницы, категории страниц. Пользователи пишут посты в гостевой книге к определенной странице. 
 * Запросы: (1) получить все комментарии к данной странице, (2) получить все комментарии данного пользователя
 */
$pdo = new PDO('mysql:dbname=homework;host=localhost;charset=utf8', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ]);
//(1)
$query = $pdo->query(
    'SELECT page_comments.text, users.name  FROM page_comments 
     LEFT JOIN users_page ON page_comments.page_id = users_page.id
     LEFT JOIN users ON page_comments.user_id = users.id
     WHERE page_id = 6'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";
//(2)
$query = $pdo->query(
    'SELECT page_comments.text FROM page_comments 
     LEFT JOIN users ON page_comments.user_id = users.id
     WHERE users.name = "Фитиль"'
);
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    var_dump($row);
    echo "<br>";
}
echo "------------<br>";