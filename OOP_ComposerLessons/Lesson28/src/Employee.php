<?php
namespace Lesson28;
/**
 * [Description Employee]
 */
class Employee implements iEmployee
{
	private string $name;
	private int $age;
	private int $salary;
	/**
	 * @param string $name
	 * @param int $age
	 * @param int $salary
	 */
	public function __construct(string $name, int $age, int $salary)
	{
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
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
	 * @return iUser
	 */
	public function setName(string $name) : iUser
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
	public function getSalary() : int
	{
		return $this->salary;
	}
	/**
	 * @param int $salary
	 * 
	 * @return iEmployee
	 */
	public function setSalary(int $salary) : iEmployee
	{
		$this->salary = $salary;
		return $this;
	}
}