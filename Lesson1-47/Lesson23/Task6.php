<?php
/**
 * 	Дан массив. Выведите каждый элемент этого массива в отдельной li в теге ul. 
 */
$arr = ['try', 'again', 'please'];
echo "<ul>";
foreach ($arr as $elem) {
    echo "<li>$elem</li>";
}
echo "</ul>";