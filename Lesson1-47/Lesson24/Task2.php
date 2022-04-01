<?php
/**
 * Отправьте с помощью GET-запроса число. Выведите его на экран квадрат этого числа. 
 */
# Адрес: http://<SERVER_NAME>/Lesson24/Task2.php?num=<number>
echo pow($_GET['num'], 2);