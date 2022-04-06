<?php
namespace Lesson33;
/**
 * [Description Test1]
 */
class Test1 implements iTest1
{
	private string $name;
	/**
	 * @param string $name
	 */
	public function __construct(string $name)
	{
		$this->name = $name;
	}
}