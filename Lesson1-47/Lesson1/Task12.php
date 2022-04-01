<?php
$num = '12345';
$sum = 0;
$arr = str_split($num, 1);
$sum = array_sum($arr);
echo $sum;