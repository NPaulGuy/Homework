<?php
namespace Lesson21;
/**
 * [Description Employee]
 */
class Employee extends User
{
	private int $salary;
	/**
	 * @param string $name
	 * @param string $surname
	 * @param string $birthday
	 * @param int $salary
	 */
	public function __construct(
		string $name, 
		string $surname, 
		string $birthday, 
		int $salary
	) {
		parent::__construct($name, $surname, $birthday);
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