<?php
namespace Lesson18;
/**
 * [Description Employee]
 */
class Driver extends Employee
{
	private int $driveAge;
	private string $category;
	/**
	 * @param string $name
	 * @param int $age
	 * @param int $salary
	 * @param int $driveAge
	 * @param string $category
	 */
	public function __construct(
		string $name, 
		int $age, 
		int $salary, 
		int $driveAge, 
		string $category
	) {
		parent::__construct($name, $age, $salary);
		$this->driveAge = $driveAge;
		$this->category = $category;
	}
	/**
	 * @return int
	 */
	public function getDriveAge() : int
	{
		return $this->driveAge;
	}
	/**
	 * @param int $driveAge
	 * 
	 * @return Driver
	 */
	public function setDriveAge(int $driveAge) : Driver
	{
		$this->driveAge = $driveAge;
		return $this;
	}
	/**
	 * @return string
	 */
	public function getCategory() : string
	{
		return $this->category;
	}
	/**
	 * @param string $category
	 * 
	 * @return Driver
	 */
	public function setCategory(string $category) : Driver
	{
		$this->category = $category;
		return $this;
	}
}