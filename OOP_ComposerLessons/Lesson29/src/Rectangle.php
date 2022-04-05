<?php
namespace Lesson29;
/**
 * [Description Rectangle]
 */
class Rectangle implements iFigure 
{
	private int $length;
	private int $width;
	/**
	 * @param int $length
	 * @param int $width
	 */
	public function __construct(int $length, int $width)
	{
		$this->length = $length;
		$this->width = $width;
	}
	/**
	 * @return int
	 */
	public function getPerimeter() : int
	{
		return ($this->length + $this->width) * 2;
	}
	/**
	 * @return int
	 */
	public function getSquare() : int
	{
		return $this->length * $this->width;
	}
}