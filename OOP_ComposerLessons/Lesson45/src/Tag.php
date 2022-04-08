<?php
namespace Lesson45;
/**
 * [Description Tag]
 */
class Tag
{
	private string $name;
	/**
	 * @param string $name
	 */
	public function __construct(string $name)
	{
		$this->name = $name;
	}
	/**
	 * @return string
	 */
	public function open() : string
	{
		$name = $this->name;
		return "<$name>";
	}
	/**
	 * @return string
	 */
	public function close() : string
	{
		$name = $this->name;
		return "</$name>";
	}
}