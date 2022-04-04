<?php
namespace Lesson18;
/**
 * [Description Employee]
 */
class Student extends User
{
	protected int $course;
	public function __construct(string $name, int $age, int $course)
	{
		parent::__construct($name, $age);
		$this->course = $course;
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