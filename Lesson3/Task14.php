<?php
/**
 * Если переменная $var НЕ равна true, то выведите 'Верно', иначе выведите 'Неверно'. 
 * Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной. 
 */
$var = true;
// Вариант 1 
if (!$var) {
    echo "Верно";
} else {
    echo "Неверно";
}
// Вариант 2 
//echo !$var ? "Верно" : "Неверно";