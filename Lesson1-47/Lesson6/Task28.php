<?php
/**
 * Дан массив с элементами 'html', 'css', 'php'. 
 * С помощью функции implode создайте строку из этих элементов, разделенных запятыми.
 */
$arr = ['html', 'css', 'php']; 
$str = implode(',', $arr);
echo $str;