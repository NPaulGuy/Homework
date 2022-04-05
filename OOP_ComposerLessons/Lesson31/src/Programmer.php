<?php
namespace Lesson31;
/**
 * [Description Programmer]
 */
class Programmer extends Employee implements iProgrammer
{
	private array $langs = [];
	/**
	 * @param string $name
	 * @param int $salary
	 * @param array $langs
	 */
	public function __construct(
		string $name, 
		int $salary, 
		array $langs
	) {
		parent::__construct($name, $salary);
		$this->langs = $langs;
	}
	/**
	 * @return array
	 */
	public function getLangs() : array
	{
		return $this->langs;
	}
	/**
	 * @param string $lang
	 * 
	 * @return iProgrammer
	 */
	public function addLang(string $lang) : iProgrammer
	{
		$this->langs[] = $lang;
		return $this;
	}
}