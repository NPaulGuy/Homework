<?php
namespace Lesson37;
/**
 * [Description Test]
 */
class Test
{
	use Trait2;
	/**
	 * @return int
	 */
	public function getSum() : int
	{
		return $this->method1() + $this->method2() + $this->method3();
	}
}