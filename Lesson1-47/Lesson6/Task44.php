<?php
/**
 * Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.
 */
$str = '<br>123<br>hello<b>BROTHER</b><i>check</i>';
echo strip_tags( $str, ['b', 'i'] );