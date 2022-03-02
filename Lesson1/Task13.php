<?php
$second = 1;
$hour = 60 * 60 * $second;
$day = 24 * $hour;
// There can be different value of days in month, so let it be 30.
$month = 30 * $day;
echo "Hour consist of $hour seconds!<br>";
echo "Day consists of $day seconds!<br>";
echo "Month with 30 days consists of $month seconds!<br>";