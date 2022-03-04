<?php
/**
 * Дано число, например 30. У этого числа есть делители - числа, на которое оно делится без остатка. 
 * Делители числа 30 - это 1, 2, 3, 5, 6, 10, 15, 30. Задача: сделайте массив делителей нашего числа. 
 * Число может быть любым, не обязательно, 30
 */
$num = 54;
// Все числа делятся нацело на 1, поэтому сразу заносим в массив делителей 1.
$divisors = [1];
for ($i = 2; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $divisors[] = $i;
    }
}
var_dump($divisors);