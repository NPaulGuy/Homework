<?php
/**
 * Узнайте какой день недели был 100 дней назад. 
 */
$week = ['воскресенье', 'понедельник', 'вторник','среда','четверг','пятница', 'суббота'];
$dateTime = date_create();
$dateTime = date_modify($dateTime, "-100 days");
echo $week[date_format($dateTime, "w")];