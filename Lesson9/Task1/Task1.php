<?php
/**
 * Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'.
 */
if (!empty(trim($_POST['name']))) {
    $name = $_POST['name'];
    echo "Привет, $name";
}
include "Task1.html";

