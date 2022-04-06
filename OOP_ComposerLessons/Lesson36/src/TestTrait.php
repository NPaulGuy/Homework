<?php
namespace Lesson36;
/**
 * [Description TestTrait]
 */
trait TestTrait
{
	/**
	 * @return int
	 */
	public function method1() : int
	{
		return 1;
	}	
	/**
	 * @return int
	 */
	abstract public function method2() : int;
}