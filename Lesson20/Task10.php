<?php
/**
 * Напишите функцию, которая создает чекбокс и сохраняет его значение после отправки.
 */
/**
 * @param string $name
 * @param string $value
 * @param bool $isChecked
 * 
 * @return void
 */
function createCheckBox(
    string $name, 
    string $value, 
    bool $isChecked
    ) : void {
        if (isset($_POST[$name])) {
            $isChecked = true;
        } else {
            $isChecked = false;
        }
        if ($isChecked) {
            echo "<input type=\"checkbox\" name=\"$name\" value=\"$value\" checked>";
        } else {
            echo "<input type=\"checkbox\" name=\"$name\" value=\"$value\">";
        }
}
if (isset($_POST['test'])) {
    echo $_POST['test'];
}
?>
<form method="POST">
    <?= createCheckbox('test', 'ОТМЕЧЕНО', true);?>
    <input type="submit" value="Ввод">
</form>
