<?php
/**
 * Дана переменная $password, в которой хранится пароль пользователя. 
 * Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.
 */
$password = 'i<3php';
if (strlen($password) > 5 && strlen($password) < 10) {
    echo "Пароль подходит!";
} else {
    echo "Пароль не подходит. Придумайте новый";
}