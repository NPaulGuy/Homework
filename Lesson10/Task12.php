<?php
/**
 * Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год.
 */
if (!empty($_POST['year'])) {
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
    <input type="number" name="year" min="1000" max="9999">
    <input type="submit" name="submitButton" value="Ввод">
</form>