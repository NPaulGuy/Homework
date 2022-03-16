<?php
/**
 * Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено.
 */
session_start();
if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
}
if (isset($_SESSION['email'])) {
    include "bigForm.php";
} else {
    include "form.php";
}