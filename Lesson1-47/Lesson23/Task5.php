<?php
/**
 * Дан массив. Выведите каждый элемент этого массива в отдельном абзаце.
 */
$arr = ['try', 'again', 'please'];
foreach ($arr as $elem) {
    echo "<p>$elem</p>";
}