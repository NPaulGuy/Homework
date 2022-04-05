<?php
namespace Lesson28;
/**
 * [Description iUser]
 */
interface iUser
{
	/**
	 * @return string
	 */
	public function getName() : string;
	/**
	 * @param string $name
	 * 
	 * @return iUser
	 */
	public function setName(string $name) : iUser;
	/**
	 * @return int
	 */
	public function getAge() : int;
	/**
	 * @param int $age
	 * 
	 * @return iUser
	 */
	public function setAge(int $age) : iUser;
}