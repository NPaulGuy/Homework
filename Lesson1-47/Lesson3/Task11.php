<?php
/**
 * Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'. 
 * Проверьте работу скрипта при $a, равном 3 и null. 
 */
$a = null;
if (isset($a)) {
    echo "Верно";
} else {
    echo "Неверно";
}