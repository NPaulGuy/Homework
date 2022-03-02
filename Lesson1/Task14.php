<?php
$hour = '';
$minute = '';
$second = '';

$currentTime = date("H:i:s");
$currentTime = explode(':',$currentTime);
$hour = $currentTime[0];
$minute = $currentTime[1];
$second = $currentTime[2];

echo "$hour:$minute:$second<br>";