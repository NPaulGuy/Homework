<?php
namespace Lesson18;
/**
 * [Description Employee]
 */
class Programmer extends Employee
{
	private array $langs = [];
	/**
	 * @param string $name
	 * @param int $age
	 * @param int $salary
	 * @param array $langs
	 */
	public function __construct(
		string $name, 
		int $age, 
		int $salary, 
		array $langs
	) {
		parent::__construct($name, $age, $salary);
		$this->langs = $langs;
	}
	/**
	 * @return int
	 */
	public function getLangs() : array
	{
		return $this->langs;
	}
	/**
	 * @param int $langs
	 * 
	 * @return Programmer
	 */
	public function setLangs(int $langs) : Programmer
	{
		$this->langs = $langs;
		return $this;
	}
}