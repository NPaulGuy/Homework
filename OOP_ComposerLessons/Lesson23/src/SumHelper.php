<?php
namespace Lesson23;
class SumHelper
{
	public function getSum2(array $arr) : int
	{
		return $this->getSum($arr, 2);
	}
	public function getSum3(array $arr) : int
	{
		return $this->getSum($arr, 3);
	}
	private function getSum(array $arr, int $power) : int
	{
		$sum = 0;
		foreach ($arr as $num) {
			$sum += pow($num, $power);
		}
		return $sum;
	}
}