<?php
/**
 * Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.
 */
$arr = [1, 4, 3, 8, 12, 55];
if (in_array(3, $arr)) {
    echo "есть";
} else {
    echo "нет";
}