<?php
namespace Lesson27;
/**
 * [Description iUser]
 */
interface iUser
{
	/**
	 * @param string $name
	 * @param int $age
	 */
	public function __construct(string $name, int $age);
	/**
	 * @return string
	 */
	public function getName() : string;
	/**
	 * @return int
	 */
	public function getAge() : int;
}