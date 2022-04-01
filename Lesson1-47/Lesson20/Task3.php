<?php
/**
 * Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок. Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен.
 */
?>
<form method="POST">
    <label>Знаете ли вы PHP?</label><br>
    <label>Нет</label>
    <input type="radio" name="php" value="0" checked>
    <label>Да</label>
    <input type="radio" name="php" value="1"><br>
    <input type="submit" value="Ввод">
</form>
<?php
if (isset($_POST['php'])) {
    if ($_POST['php']) {
        echo "Вы знаете PHP! Это сильно!";
    } else {
        echo "Вы не знаете PHP? Может, это к лучшему.";
    }
}