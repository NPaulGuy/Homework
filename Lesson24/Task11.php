<?php
/**
 * Модифицируйте предыдущую задачу так, чтобы ссылки выводились с помощью цикла foreach автоматически в соответствии с количеством элементов в массиве.
 */
$arr = [55, 34, 12, 6, 1];
if (isset($_GET['id'])) {
    if ($_GET['id'] >= 0 && $_GET['id'] < count($arr)) {
        echo $arr[$_GET['id']] . '<br>';
    }
}
foreach ($arr as $key => $elem) {
    $id = $key + 1;
    echo "<a href=\"?id=$key\">elem №$id</a><br>";
}
?>