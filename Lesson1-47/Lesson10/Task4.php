<?php
/**
 * Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени.
 */
echo time() - mktime(13, 12, 59, 3, 15, 2000);