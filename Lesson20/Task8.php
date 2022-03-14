<?php
/**
 * Модифицируйте функцию из предыдущей задачи так, чтобы она сохраняла значение инпута после отправки. 
 */
function createInput(string $type, string $name, string $value) : void {
    if(isset($_POST[$name])) {
        $value = $_POST[$name];
    }
    echo "<input type=\"$type\" name=\"$name\" value=\"$value\">";
}
?>
<form method="POST">
    <?= createInput('text', 'song', 'TAKA YAK TI');?>
    <input type="submit" value="Ввод">
</form>