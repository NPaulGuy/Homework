<?php
namespace Lesson23;
class AvgHelper
{
	public function getMeanSquare(array $arr) : float
	{
		$sum = 0;
		foreach ($arr as $num) {
			$sum += pow($num, 2);
		}
		return sqrt($sum / count($arr));
	}
	public function getAvg(array $arr) : float
	{
		return array_sum($arr) / count($arr);
	}
}