<?php
/**
 * В переменной $date лежит дата в формате '2025-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня. 
 */
$date = '2025-12-31';
$dateTime = date_create($date);
date_modify($dateTime, "2 days");
date_modify($dateTime, "1 month 3 days");
date_modify($dateTime, "1 year");
date_modify($dateTime, "-3 days");
echo date_format($dateTime, "d.m.Y");