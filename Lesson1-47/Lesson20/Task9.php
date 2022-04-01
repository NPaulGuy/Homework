<?php
/**
 * Сделайте функцию, которая создает чекбокс. Если чекбокс не отмечен - функция должна отправлять 0 (то есть нужно сделать hidden инпут), если отмечен - 1.
 */
function createCheckbox(
    string $name, 
    string $value, 
    bool $isChecked
    ) : void {
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