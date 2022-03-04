<?php
/**
 * Сделайте форму, которая спрашивает дату в формате '31.12.2025'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату.
 */

$week = ['воскресенье', 'понедельник', 'вторник','среда','четверг','пятница', 'суббота'];
if (
    !empty($_POST['date']) 
    && preg_match('#^\d{2}\.\d{2}\.\d{4}$#', $_POST['date'])
) {
    $date = $_POST['date']; 
    $arr = explode('.', $date);
    echo $week[date("w", mktime(0, 0, 0, $arr[1], $arr[0], $arr[2]))];
}
?>
<form method="post" name="inputForm">
    <label>Дата:</label><br>
    <input type="text" name="date">
    <input type="submit" name="submitButton" value="Ввод">
</form>