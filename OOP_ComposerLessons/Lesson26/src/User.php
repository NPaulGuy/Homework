<?php
namespace Lesson26;
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
	 * @param string $name
	 * 
	 * @return iUser
	 */
	public function setName(string $name) : iUser
	{
		$this->name = $name;
		return $this;
	}
	/**
	 * @return string
	 */
	public function getName() : string
	{
		return $this->name;
	}
	/**
	 * @param int $age
	 * 
	 * @return iUser
	 */
	public function setAge(int $age) : iUser
	{
		$this->age = $age;
		return $this;
	}
	/**
	 * @return int
	 */
	public function getAge() : int
	{
		return $this->age;
	}
}