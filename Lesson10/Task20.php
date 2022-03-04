<?php
/**
 * Сделайте форму с одним полем ввода, в которое пользователь вводит год. Найдите все пятницы 13-е в этом году. Результат выведите в виде массива дат.
 */
if (
    !empty($_POST['year']) 
    && preg_match('#^\d+$#', $_POST['year'])
) {
    $year = $_POST['year']; 
    echo "Пятницы 13-ое в $year году:<br>";
    for ($i = 1; $i <=12; $i++) {
        if (date("w", mktime(0, 0, 0, $i, 13, $year)) == 5) {
            echo date("d.m", mktime(0, 0, 0, $i, 13, $year)) . "<br>";
        }
    }
}
?>
<form method="post" name="inputForm">
    <label>Год:</label><br>
    <input type="text" name="year">
    <input type="submit" name="submitButton" value="Ввод">
</form>