<?php
/**
 * 	Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
 */
/**
 * minusAndDivide
 *
 * @param  int $num start number
 * @param  int $minusNum number for minus operation
 * @param  int $divNum number for divide operation
 * @return float
 */
function minusAndDivide(int $num, int $minusNum, int $divNum) : float {
    return ($num - $minusNum) / $divNum;
}
echo minusAndDivide(5, 3, -2);