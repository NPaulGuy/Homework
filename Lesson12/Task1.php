<?php
/**
 * Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть - выведите 'да', а если нет - выведите 'нет'.
 */
$arr = [1, 3, 5, 7, 8, 11];
$flag = false;
foreach ($arr as $elem) {
    if ($elem === 5) {
        $flag = true;
        break;
    }
}
if ($flag) {
    echo "Есть!";
} else {
    echo "Нет!";
}
