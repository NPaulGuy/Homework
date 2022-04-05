<?php
namespace Lesson27;
/**
 * [Description User]
 */
class User implements iUser
{
	private string $name;
	private int $age;
	/**
	 * @param string $name
	 * @param int $age
	 */
	public function __construct(string $name, int $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	/**
	 * @return string
	 */
	public function getName() : string
	{
		return $this->name;
	}
	/**
	 * @return int
	 */
	public function getAge() : int
	{
		return $this->age;
	}
}