<?php
/**
 * Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный.
 */
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);