<?php
/**
 * Дан массив. Сделайте так, чтобы с помощью GET-запроса можно было вывести любой элемент этого массива. 
 */
# Адрес: http://<SERVER_NAME>/Lesson24/Task5.php?id=<number>
$arr = [2, 5 ,7, 22, 48, 853];
if (isset($_GET['id'])) {
    if ($_GET['id'] < 0) {
        echo $arr[0];
    } elseif ($_GET['id'] >= count($arr)) {
        echo $arr[count($arr) - 1];
    } else {
        echo $arr[floor($_GET['id'])];
    }
}