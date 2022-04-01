<?php
/**
 * Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали.
 */
if (!empty(trim($_POST['name']))) {
    $name = $_POST['name'];
    echo "Привет, $name";
}
?>
<form method="post" name="inputForm">
    <label>Имя:</label><br>
    <input type="text" name="name" placeholder="Имя" value="<?= $name ?? "" ?>">
    <input type="submit" name="submitButton" value="Ввод">
</form>