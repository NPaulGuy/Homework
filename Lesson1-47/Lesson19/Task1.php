<?php
/**
 * Сделайте функцию cut, которая первым параметром будет принимать строку, а вторым параметром - сколько первых символов оставить в этой строке. Второй параметр должен быть необязательным и по умолчанию принимать значение 10.
 */
/**
 * @param string $str
 * @param int $count
 * 
 * @return string
 */
function cut(string $str, int $count = 10) : string {
    return substr($str, 0, $count);
}
echo cut('How much will you cut???', -3);