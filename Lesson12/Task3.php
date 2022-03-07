<?php
/**
 * 	Дан массив с числами. Проверьте, есть ли в нем два одинаковых числа подряд. Если есть - выведите 'да', а если нет - выведите 'нет'. 
 */
$arr = [1, 18, 31, 3, 32, 3];
$flag = false; 
for ($i = 0; $i < count($arr); $i++) {
    if ($flag) {
        break;
    }
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$i] == $arr[$j]) {
            $flag = true;
            break;
        }
    }
}
if ($flag) {
    echo "Да";
} else {
    echo "Нет";
}