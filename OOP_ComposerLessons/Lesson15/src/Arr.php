<?php
namespace Lesson15;
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
	 * @return int
	 */
	public function getSum() : int
	{
		return array_sum($this->numbers);
	}
}	