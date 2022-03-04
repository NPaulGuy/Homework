<?php
/**
 * Дан массив с элементами 1, 2, 4, 5, 5. Найдите второй по величине элемент. В нашем случае это будет 4.
 */
$arr = [1, 2, 4, 5, 5];
rsort($arr);
$highNum = array_shift($arr);
if (empty($arr)) {
    echo "$highNum - единственное число в массиве";
}
foreach ($arr as $elem) {
    if ($elem !== $highNum) {
        echo "$elem - второе по величине число в массиве";
        break;
    }
}