<?php
/**
 * 	Сделайте форму, которая спрашивает дату в формате '2025-12-31'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату. 
 */
$month = [
    1 => 'январь', 'февраль', 'март',
    'апрель', 'май', 'июнь',
    'июль', 'август', 'сентябрь',
    'октябрь', 'ноябрь', 'декабрь'
];
if (
    !empty($_POST['date']) 
    && preg_match('#^\d{4}-\d{2}-\d{2}$#', $_POST['date'])
) {
    $date = $_POST['date']; 
    $arr = explode('-', $date);
    echo $month[date("n", mktime(0, 0, 0, $arr[1], $arr[2], $arr[0]))];
}
?>
<form method="post" name="inputForm">
    <label>Дата:</label><br>
    <input type="text" name="date">
    <input type="submit" name="submitButton" value="Ввод">
</form>