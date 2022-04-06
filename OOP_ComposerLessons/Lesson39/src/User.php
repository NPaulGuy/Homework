<?php
namespace Lesson39;
/**
 * [Description User]
 */
class User
{
	private string $name;
	private string $surname;
	private string $patronymic;
	/**
	 * @param string $name
	 * @param string $surname
	 * @param string $patronymic
	 */
	public function __construct(
		string $name, 
		string $surname, 
		string $patronymic
	) {
		$this->name = $name;
		$this->surname = $surname;
		$this->patronymic = $patronymic;
	}
	/**
	 * @return int
	 */
	public function __toString()
	{
		return $this->name . 
			'_' . $this->surname . 
			'_' . $this->patronymic;
	}
		
	/**
	 * @return string
	 */
	public function getName() : string
	{
		return $this->name;
	}
	/**
	 * @return string
	 */
	public function getSurname() : string
	{
		return $this->surname;
	}
	/**
	 * @return string
	 */
	public function getPatronymic() : string
	{
		return $this->patronymic;
	}
}