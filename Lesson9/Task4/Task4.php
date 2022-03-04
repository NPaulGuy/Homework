<?php
/**
 * Спросите у пользователя логин и пароль (в браузере должен быть звездочками). 
 * Сравните их с логином $login и паролем $pass, хранящихся в файле. 
 * Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. 
 * Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.
 */
$login = "NPaulGuy";
$password ="abcSausage";
if (
    !empty(trim($_POST['login'])) 
    && !empty(trim($_POST['password']))
) {
    $_POST['login'] = trim($_POST['login']);
    $_POST['password'] = trim($_POST['password']);
    if (
        $_POST['login'] == $login
        && $_POST['password'] == $password
    ) {
        echo "Доступ разрешен!";
    } else {
        echo "Доступ запрещен!";
    }
    
}
include "Task4.html";