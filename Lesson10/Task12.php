<?php
/**
 * Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год.
 */
if (
    !empty($_POST['year']) 
    && $_POST['year'] >= 1000
    && $_POST['year'] < 10000
) {
    $year = trim($_POST['year']); 
    if ($year % 4 === 0) {
        echo "Год високосный!";
    } else {
        echo "Год не високосный.";
    }
}
?>
<form method="post" name="inputForm">
    <label>Год:</label><br>
    <input type="text" name="year">
    <input type="submit" name="submitButton" value="Ввод">
</form>