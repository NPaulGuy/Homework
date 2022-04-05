<?php
namespace Lesson30;
/**
 * [Description Rectangle]
 */
class Rectangle implements iFigure, iTetragon
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
	public function getA() : int
	{
		return $this->width;
	}
	/**
	 * @return int
	 */
	public function getB() : int
	{
		return $this->length;
	}
	/**
	 * @return int
	 */
	public function getC() : int
	{
		return $this->width;
	}
	/**
	 * @return int
	 */
	public function getD() : int
	{
		return $this->length;
	}
	/**
	 * @return int
	 */
	public function getSquare() : float
	{
		return $this->length * $this->width;
	}
	/**
	 * @return int
	 */
	public function getPerimeter() : float
	{
		return ($this->length + $this->width) * 2;
	}
}