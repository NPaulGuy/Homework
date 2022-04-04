<?php
namespace Lesson18;
/**
 * [Description Employee]
 */
class Employee extends User
{
	protected int $salary;
	public function __construct(string $name, int $age, int $salary)
	{
		parent::__construct($name, $age);
		$this->salary = $salary;
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
	 * @return Employee
	 */
	public function setSalary(int $salary) : Employee
	{
		$this->salary = $salary;
		return $this;
	}
}