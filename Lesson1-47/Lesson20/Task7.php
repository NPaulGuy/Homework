<?php
/**
 * Сделайте функцию, которая создает обычный текстовый инпут. Функция должна иметь следующие параметры: type, name, value.
 */
function createInput(string $type, string $name, string $value) : void {
    echo "<input type=\"$type\" name=\"$name\" value=\"$value\">";
}
?>
<form method="POST">
    <?= createInput('text', 'song', 'TAKA YAK TI');?>
    <input type="submit" value="Ввод">
</form>