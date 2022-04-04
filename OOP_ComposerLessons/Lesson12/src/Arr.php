<?php
namespace Lesson12;
/**
 * [Description Arr]
 */
class Arr
{
	private $numbers = [];
	/**
	 * @param array $arr
	 * 
	 * @return Arr
	 */
	public function add(array $arr) : Arr
	{
		foreach ($arr as $num) {
			$this->numbers[] = $num;
		}
		return $this;
	}
	/**
	 * @return int
	 */
	public function getSum() : int
	{
		return array_sum($this->numbers);
	}
    /**
     * @return float
     */
	public function getAvg() : float
	{
		return array_sum($this->numbers) / count($this->numbers);
	}
}	