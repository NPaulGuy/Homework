<?php
/**
 * Дан массив. Сделайте так, чтобы с помощью GET-запроса можно было вывести любой элемент этого массива. Для этого вручную сделайте ссылку для каждого элемента массива. Переходя любой ссылке мы должны увидеть на экране соответствующий элемент массива.
 */
$arr = [55, 34, 12, 6, 1];
if (isset($_GET['id'])) {
    if ($_GET['id'] >= 0 && $_GET['id'] < count($arr)) {
        echo $arr[$_GET['id']] . '<br>';
    }
}
?>
<a href="?id=0">1-st elem</a><br>
<a href="?id=1">2-nd elem</a><br>
<a href="?id=2">3-rd elem</a><br>
<a href="?id=3">4-th elem</a><br>
<a href="?id=4">5-th elem</a><br>