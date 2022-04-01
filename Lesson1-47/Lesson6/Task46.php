<?php
/**
 * Узнайте код символов 'a', 'b', 'c', пробела. 
 */
$arr = ['a', 'b', 'c', ' '];
foreach ($arr as $elem) {
    echo ord($elem) . '<br>';
}