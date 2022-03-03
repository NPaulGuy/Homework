<?php
/**
 * Найдите квадратный корень из 379. 
 * Результат округлите до целых, до десятых, до сотых. 
 */
$num = 379;
$ones = round (sqrt($num));
$dotTens = round (sqrt($num), 1);
$dotHundreds = round (sqrt($num), 2);
echo $ones . '_' . $dotTens . '_' . $dotHundreds;