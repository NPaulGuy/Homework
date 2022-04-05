<?php
namespace Lesson26;
/**
 * [Description iUser]
 */
interface iUser
{
	/**
	 * @param string $name
	 * 
	 * @return iUser
	 */
	public function setName(string $name) : iUser;
	/**
	 * @return string
	 */
	public function getName() : string;
	/**
	 * @param int $age
	 * 
	 * @return iUser
	 */
	public function setAge(int $age) : iUser;
	/**
	 * @return int
	 */
	public function getAge() : int;
}