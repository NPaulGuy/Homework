<?php
/**
 * Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'. 
 */
$a = '0';
if(!empty($a)) {
    echo "Верно";
} else {
    echo "Неверно";
}