<?php
/**
 * Пусть у вас есть трейт Trait1 и нет трейта Trait2. Проверьте, что выведет функция trait_exists для трейта Trait1 и для трейта Trait2.
 * Выведите на экран список всех объявленных трейтов. 
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson38\Trait1;

var_dump(trait_exists('Lesson38\Trait1'));
var_dump(trait_exists('Lesson38\Trait2'));
var_dump(get_declared_traits());