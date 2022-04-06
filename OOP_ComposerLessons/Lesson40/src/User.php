<?php
namespace Lesson40;
/**
 * [Description User]
 */
class User
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
	 * @param string $property
	 * 
	 * @return string
	 */
	public function __get(string $property) : string
	{
		return (string) $this->$property;
	}
}