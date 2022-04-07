<?php
namespace Lesson41;
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
		if (property_exists("Lesson41\User", $property)) {
			return $this->$property;
		} else {
			return "";
		}
	}
	/**
	 * @param string $property
	 * @param string $value
	 * 
	 * @return User
	 */
	public function __set(string $property, string $value) : User
	{
		switch ($property) 
		{
			case 'name' :
				if ($value != '') {
					$this->$property = $value;
				}
				break;
			case 'age' :
				if ($value >= 0 and $value <= 70) {
					$this->$property = $value;
				}
				break;
			default :
				echo "Свойства $property не существует!<br>";
				break;
		}
		return $this;
	}
}