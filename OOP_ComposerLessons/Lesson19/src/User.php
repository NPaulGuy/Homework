<?php
namespace Lesson19;
/**
 * [Description User]
 */
class User
{
	protected string $name;
	protected int $age;
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
	 * @param string $name
	 * 
	 * @return User
	 */
	public function setName(string $name) : User
	{
		$this->name = $name;
		return $this;
	}
	/**
	 * @return int
	 */
	public function getAge() : int
	{
		return $this->age;
	}
	/**
	 * @param int $age
	 * 
	 * @return User
	 */
	public function setAge(int $age) : User
	{
		$this->age = $age;
		return $this;
	}
}