<?php
/**
 * Дана строка 'html css php'. 
 * Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
 */
$str = 'html css php';
echo substr($str, 0, 4) 
     . '_' . substr($str, 5, 3) 
     . '_' . substr($str, 9, 3);