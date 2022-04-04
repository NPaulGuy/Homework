<?php
namespace Lesson20;
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
		if (strlen($name) > 3) {
			$this->name = $name;
		} else {
			echo "Invalid setName(too few letters)!<br>";
			$this->name = "No_name";
		}
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
		if (strlen($name) > 3) {
			$this->name = $name;
		} else {
			echo "Invalid setName(too few letters)!<br>";
		}
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