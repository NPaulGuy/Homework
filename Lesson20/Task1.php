<?php
/**
 * Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он отмечен, то поприветствуйте пользователя, если не отмечен - попрощайтесь с пользователем. 
 */
?>
<form method="POST">
    <label>Имя:</label><br>
    <input type="text" placeholder="Имя" name="name">
    <!--<input type="hidden" name="check">-->
    <input type="checkbox" name="check">
    <input type="submit" value="Ввод">
</form>
<?php
if (!empty(htmlspecialchars($_POST['name']))) {
    $name = $_POST['name'];
    if (isset($_POST['check'])) {
        echo "Приветствуем, $name!";
    } else {
        echo "До свидания, $name!";
    }
}