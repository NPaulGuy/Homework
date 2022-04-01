<?php
/**
 * Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8. С помощью цикла и функций array_shift и array_pop выведите на экран его элементы в следующем порядке: 18273645.
 */
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
while (count($arr)) {
    echo array_shift($arr);
    echo array_pop($arr);
} 