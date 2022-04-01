<?php
/**
 * Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл. 
 */

/**
 * @param array $arr
 * 
 * @return void
 */
function recurseOutput(array $arr) : void {
    if(!count($arr)) {
        return;
    } else {
        echo $arr[0] . '<br>';
        array_shift($arr);
        recurseOutput($arr);
    }
}
$arr = [2, 55, -325, 42, 6788, 123, 'hallo'];
recurseOutput($arr);