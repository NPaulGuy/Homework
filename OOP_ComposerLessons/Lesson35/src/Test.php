<?php
namespace Lesson35;
class Test
{
	use Trait1, Trait2, Trait3 {
		Trait1::method insteadOf Trait2, Trait3;
		Trait1::method as method1;
		Trait2::method as method2;
		Trait3::method as method3;
	}
	public function getSum() : int
	{
		return $this->method1() + $this->method2() + $this->method3();
	}
}