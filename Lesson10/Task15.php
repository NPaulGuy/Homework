<?php
/**
 * 	Сделайте форму, которая спрашивает две даты в формате '2025-12-31'. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран.
 */
if (
    !empty($_POST['date1']) 
    && !empty($_POST['date2'])
    && preg_match('#^\d{4}-\d{2}-\d{2}$#', $_POST['date1'])
    && preg_match('#^\d{4}-\d{2}-\d{2}$#', $_POST['date2'])
) {
    $date1 = $_POST['date1']; 
    $date2 = $_POST['date2']; 
    $arr1 = explode('-', $date1);
    $arr2 = explode('-', $date2);
    $date1 = mktime(0, 0, 0, $arr1[1], $arr1[2], $arr1[0]);
    $date2 = mktime(0, 0, 0, $arr2[1], $arr2[2], $arr2[0]);
    if ($date1 > $date2) {
        echo "Больше Дата1: " . $_POST['date1'];
    } elseif ($date1 < $date2) {
        echo "Больше Дата2: " . $_POST['date2'];
    }
}
 ?>
 <form method="post" name="inputForm">
    <label>Дата1:</label><br>
    <input type="text" name="date1"><br>
    <label>Дата2:</label><br>
    <input type="text" name="date2">
    <input type="submit" name="submitButton" value="Ввод">
</form>