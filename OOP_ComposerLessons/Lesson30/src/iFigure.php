<?php
namespace Lesson30;
/**
 * [Description iFigure]
 */
interface iFigure
{
	/**
	 * @return int
	 */
	public function getSquare() : float;
	/**
	 * @return int
	 */
	public function getPerimeter() : float;
}