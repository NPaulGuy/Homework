<?php
namespace Lesson16;
/**
 * [Description Arr]
 */
class Arr
{
	private $numbers = [];
	/**
	 * @param array $numbers
	 */
	public function __construct(array $numbers) 
	{
		$this->numbers = $numbers;
	}
	/**
	 * @param int $num
	 * 
	 * @return Arr
	 */
	public function add(int $num) : Arr
	{
		$this->numbers[] = $num;
		return $this;
	}
	/**
	 * @param array $numbers
	 * 
	 * @return Arr
	 */
	public function push(array $numbers) : Arr
	{
		$this->numbers = array_merge($this->numbers, $numbers);
		return $this;
	}
	/**
	 * @return int
	 */
	public function getSum() : int
	{
		return array_sum($this->numbers);
	}
}