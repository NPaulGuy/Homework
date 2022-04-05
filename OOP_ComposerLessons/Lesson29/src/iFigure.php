<?php
namespace Lesson29;
interface iFigure 
{
	/**
	 * @return int
	 */
	public function getPerimeter() : int;
	/**
	 * @return int
	 */
	public function getSquare() : int;
}