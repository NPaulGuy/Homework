<?php
namespace Lesson19;
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
		parent::__construct($name, $age);
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
}