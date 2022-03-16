<?php
/**
 * По заходу на страницу запишите в сессию текст 'test'. Затем обновите страницу и выведите содержимое сессии на экран.
 */
session_start();
//$_SESSION['text'] = 'test';
if (isset($_SESSION['text'])) {
    echo $_SESSION['text'];
}