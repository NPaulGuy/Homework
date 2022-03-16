<?php
/**
 * Сделайте две страницы: index.php и test.php. При заходе на index.php спросите с помощью формы страну пользователя, запишите ее в сессию (форма при этом должна отправится на эту же страницу). Пусть затем пользователь зайдет на страницу test.php - выведите там страну пользователя.
 */
session_start();
if (isset($_POST['country'])) {
    $_SESSION['country'] = $_POST['country'];
}
?>
<form method="POST" action="">
    <label>Введите вашу страну!</label><br>
    <input type="text" name="country" placeholder="Страна"><br>
    <input type="submit" value="Ввод">
</form>