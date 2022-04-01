<?php
namespace Lesson12;
class Arr
{
	private $numbers = [];
	public function add(array $arr) : Arr
	{
		foreach ($arr as $num) {
            $this->numbers[] = $num;
        }
        return $this;
	}
	public function getSum() : int
	{
		return array_sum($this->numbers);
	}
    public function getAvg() : float
    {
        return array_sum($this->numbers) / count($this->numbers);
    }
}	