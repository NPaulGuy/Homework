<?php
/**
 * Дана строка '12345678'. Сделайте из нее строку '12 345 678'.
 */
$str = '12345678';
echo number_format($str, 0, '.', ' ');