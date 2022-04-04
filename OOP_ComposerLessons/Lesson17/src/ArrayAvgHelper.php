<?php
namespace Lesson17;
/**
 * [Description ArrayAvgHelper]
 */
class ArrayAvgHelper
{
	/**
	 * @param array $arr
	 * 
	 * @return float
	 */
	public function getAvg1(array $arr)  : float
	{
		return $this->getSum($arr, 1);
	}
	/**
	 * @param array $arr
	 * 
	 * @return float
	 */
	public function getAvg2(array $arr) : float
	{
		return $this->calcSqrt(
			$this->getSum($arr, 2),
			2
		);
	}
	/**
	 * @param array $arr
	 * 
	 * @return float
	 */
	public function getAvg3(array $arr) : float
	{
		return $this->calcSqrt(
			$this->getSum($arr, 3),
			3
		);
	}
	/**
	 * @param array $arr
	 * 
	 * @return float
	 */
	public function getAvg4(array $arr) : float
	{
		return $this->calcSqrt(
			$this->getSum($arr, 4),
			4
		);
	}
	/**
	 * @param array $arr
	 * @param int $power
	 * 
	 * @return float
	 */
	private function getSum(array $arr, int $power) : float 
	{
		$sum = 0;
		foreach ($arr as $num) {
			$sum += pow($num, $power);
		}
		return $sum;
	}
	/**
	 * @param float $num
	 * @param int $power
	 * 
	 * @return float
	 */
	private function calcSqrt(float $num, int $power) : float
	{
		return pow($num, 1 / $power);
	}
}