<?php
/**
 * Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени.
 */
$seconds = time() - mktime(7, 23, 48);
echo floor($seconds / (60 * 60));