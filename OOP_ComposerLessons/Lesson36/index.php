<?php
/**
 * Скопируйте код трейта TestTrait и код класса Test автора. Удалите из класса метод method2. Убедитесь в том, что отсутствие его реализации приведет к ошибке PHP.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson36\Test;

$test = new Test();
// Если нет реализации method2, то выведет ошибку(см. класс Test).