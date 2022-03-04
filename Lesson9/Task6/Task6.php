<?php
/**
 * Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так, чтобы после отправки формы значения его полей не пропадали
 */
if (
    !empty($_POST['name']) 
    && !empty($_POST['text'])
) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    echo "Привет, $name.<br>Твоё сообщение: $text";
}
?>
<form method="post" name="inputForm">
    <label>Имя:</label><br>
    <input type="text" name="name" placeholder="Имя" value="<?= $name ?? "" ?>"><br>
    <label>Сообщение:</label><br>
    <input type="text" name="text" placeholder="Текст сообщения" value="<?= $text ?? "" ?>"><br>
    <input type="submit" name="submitButton" value="Ввод">
</form>