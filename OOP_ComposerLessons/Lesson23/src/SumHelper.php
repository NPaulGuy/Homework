<?php
namespace Lesson23;
/**
 * [Description SumHelper]
 */
class SumHelper
{
	/**
	 * @param array $arr
	 * 
	 * @return int
	 */
	public function getSum2(array $arr) : int
	{
		return $this->getSum($arr, 2);
	}
	/**
	 * @param array $arr
	 * 
	 * @return int
	 */
	public function getSum3(array $arr) : int
	{
		return $this->getSum($arr, 3);
	}
	/**
	 * @param array $arr
	 * @param int $power
	 * 
	 * @return int
	 */
	private function getSum(array $arr, int $power) : int
	{
		$sum = 0;
		foreach ($arr as $num) {
			$sum += pow($num, $power);
		}
		return $sum;
	}
}