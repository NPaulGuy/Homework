<?php
namespace Lesson37;
trait Trait2
{
	use Trait1;
	/**
	 * @return int
	 */
	private function method3() : int
	{
		return 3;
	}
}