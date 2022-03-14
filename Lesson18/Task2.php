<?php
/**
 * Сделайте функцию, которая возвращает множественное или единственное число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция первым параметром принимает число, а следующие 3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четырех, например, func(3, 'яблоко', 'яблока', 'яблок').
 */
/**
 * @param int $count
 * @param string $one
 * @param string $twoFour
 * @param string $many
 * 
 * @return string
 */
function outputNoun(
    int $count, 
    string $one, 
    string $twoFour, 
    string $many
    ) : string {
        /* если число от 100 и больше, то разбиваем его на части, 
        чтобы проверить случаи с 101, 102 и т.д.
        */
        $arr = str_split($count, 2);
        $lastCount = $arr[count($arr) - 1];
        if ($count < 0) {
            die("Wrong count!");
        } elseif ($lastCount == 1) {
            return $count . ' ' . $one;
        } elseif ($lastCount >= 2 && $lastCount <= 4) {
            return $count . ' ' . $twoFour;
        } elseif ($lastCount > 4 || $lastCount == 0) {
            return $count . ' ' . $many;
        }
    }
echo outputNoun(10002, 'банан', 'банана', 'бананов');