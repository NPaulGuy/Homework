<?php
/**
 * Дана буква английского алфавита. Узнайте, она маленькая или большая.
 */
$symbol = 'J';
$code = ord($symbol); 
if ($code >= 65 && $code <= 90) {
    echo "Буква $symbol - большая";
} elseif ($code >= 97 && $code <= 122) {
    echo "Буква $symbol - маленькая";
} else {
    echo "$symbol - не латинская буква!"
}