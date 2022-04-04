<?php
namespace Lesson21;
/**
 * [Description Student]
 */
class Student extends User
{
	private $course;
	/**
	 * @param string $name
	 * @param string $surname
	 * @param string $birthday
	 * @param int $course
	 */
	public function __construct(
		string $name, 
		string $surname, 
		string $birthday, 
		int $course
	) {
		parent::__construct($name, $surname, $birthday);
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