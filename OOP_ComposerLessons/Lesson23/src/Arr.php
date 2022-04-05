<?php
namespace Lesson23;
class Arr
{
	private array $nums = [];
	private SumHelper $sumHelper;
	private AvgHelper $avgHelper;
	public function __construct(array $arr)
	{
		$this->nums = $arr;
		$this->sumHelper = new SumHelper;
		$this->avgHelper = new AvgHelper;
	}
	public function getNums() : array
	{
		return $this->nums;
	}
	public function add(int $num) : Arr
	{
		$this->nums[] = $num;
		return $this;
	}
	public function getSum23() : int
	{
		$nums = $this->nums;
		return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums); 
	}
	public function getAvgMeanSum() : float
	{
		$nums = $this->nums;
		return $this->avgHelper->getAvg($nums) + $this->avgHelper->getMeanSquare($nums);
	}
}