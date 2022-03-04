<?php
/**
 * Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'. С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025'.
 */
if (
    !empty($_POST['date']) 
    && preg_match('#^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}$#', $_POST['date'])
) {
    $date = $_POST['date']; 
    echo date("H:i:s d.m.Y", strtotime($date));
}
?>
<form method="post" name="inputForm">
    <label>Дата:</label><br>
    <input type="text" name="date">
    <input type="submit" name="submitButton" value="Ввод">
</form>