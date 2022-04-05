<?php
namespace Lesson23;
/**
 * [Description AvgHelper]
 */
class AvgHelper
{
	/**
	 * @param array $arr
	 * 
	 * @return float
	 */
	public function getMeanSquare(array $arr) : float
	{
		$sum = 0;
		foreach ($arr as $num) {
			$sum += pow($num, 2);
		}
		return sqrt($sum / count($arr));
	}
	/**
	 * @param array $arr
	 * 
	 * @return float
	 */
	public function getAvg(array $arr) : float
	{
		return array_sum($arr) / count($arr);
	}
}