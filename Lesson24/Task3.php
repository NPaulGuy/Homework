<?php
/**
 * Отправьте с помощью GET-запроса два числа. Выведите его на экран сумму этих чисел. 
 */
# Адрес: http://<SERVER_NAME>/Lesson24/Task3.php?num1=<number>&num2=<number>
echo $_GET['num1'] + $_GET['num2'];