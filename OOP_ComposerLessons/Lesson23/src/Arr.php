<?php
namespace Lesson23;
/**
 * [Description Arr]
 */
class Arr
{
	private array $nums = [];
	private SumHelper $sumHelper;
	private AvgHelper $avgHelper;
	/**
	 * @param array $arr
	 */
	public function __construct(array $arr)
	{
		$this->nums = $arr;
		$this->sumHelper = new SumHelper;
		$this->avgHelper = new AvgHelper;
	}
	/**
	 * @return array
	 */
	public function getNums() : array
	{
		return $this->nums;
	}
	/**
	 * @param int $num
	 * 
	 * @return Arr
	 */
	public function add(int $num) : Arr
	{
		$this->nums[] = $num;
		return $this;
	}
	/**
	 * @return int
	 */
	public function getSum23() : int
	{
		$nums = $this->nums;
		return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums); 
	}
	/**
	 * @return float
	 */
	public function getAvgMeanSum() : float
	{
		$nums = $this->nums;
		return $this->avgHelper->getAvg($nums) + $this->avgHelper->getMeanSquare($nums);
	}
}