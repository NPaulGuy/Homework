<?php
namespace Lesson31;
/**
 * [Description Employee]
 */
class Employee
{
	private string $name;
	private int $salary;
	/**
	 * @param string $name
	 * @param int $salary
	 */
	public function __construct(string $name, int $salary)
	{
		$this->name = $name;
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
	 * @return int
	 */
	public function getSalary() : int
	{
		return $this->salary;
	}
}