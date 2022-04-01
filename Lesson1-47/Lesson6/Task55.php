<?php
/**
 * Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.
 */
$str = 'var_test_text_another_test';
$arr = explode('_', $str);
$newStr = '';
for ($i = 0; $i < count($arr); $i++) {
    if($i == 0) {
        $newStr .= $arr[$i];
    } else {
        $newStr .= ucfirst($arr[$i]);
    }
}
echo $newStr;