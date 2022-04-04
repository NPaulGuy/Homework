<?php
namespace Lesson20;
/**
 * [Description Student]
 */
class Student extends User
{
	private $course;
	/**
	 * @param string $name
	 * @param int $age
	 * @param int $course
	 */
	public function __construct(string $name, int $age, int $course)
	{
		if (strlen($name) < 10) {
			parent::__construct($name, $age);
		} else {
			echo "Invalid setName(too many letters)!<br>";
			parent::__construct("No_name", $age);
		}
		$this->course = $course;
	}
	/**
	 * @return Student
	 */
	public function addOneYear() : Student
	{
		$this->age++;
		return $this;
	}
	/**
	 * @return int
	 */
	public function getCourse() : int
	{
		return $this->course;
	}
	/**
	 * @param int $course
	 * 
	 * @return Student
	 */
	public function setCourse(int $course) : Student
	{
		$this->course = $course;
		return $this;
	}
	public function setName(string $name) : Student
	{
		if (strlen($name) < 10) {
			parent::setName($name);
		} else {
			echo "Invalid setName(too many letters)!<br>";
		}
		return $this;
	}
}