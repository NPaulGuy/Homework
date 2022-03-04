<?php
/**
 * Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). 
 * Выведите эти данные на экран в формате, приведенном под данной задачей. 
 * Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.
 */
if (
    !empty($_POST['name']) 
    && !empty($_POST['age'])
    && !empty($_POST['text'])
) {
    $name = strip_tags($_POST['name']);
    $age = strip_tags($_POST['age']);
    $text = strip_tags($_POST['text']);
    echo "Привет, $name, $age лет.<br>Твоё сообщение: $text";
}
include "Task2.html";