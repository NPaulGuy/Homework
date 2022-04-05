<?php
namespace Lesson28;
/**
 * [Description iEmployee]
 */
interface iEmployee extends iUser
{
	/**
	 * @return int
	 */
	public function getSalary() : int;
	/**
	 * @param int $salary
	 * 
	 * @return iEmployee
	 */
	public function setSalary(int $salary) : iEmployee;
}