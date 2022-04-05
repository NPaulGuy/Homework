<?php
namespace Lesson30;
class Disk implements iFigure, iCircle
{
	private int $radius;
	const PI = 3.14;
	public function __construct(int $radius) 
	{
		$this->radius = $radius;
	}
	/**
	 * @return int
	 */
	public function getRadius() : int
	{
		return $this->radius;
	}
	/**
	 * @return int
	 */
	public function getDiameter() : int
	{
		return $this->radius * 2;
	}
	/**
	 * @return float
	 */
	public function getSquare() : float
	{
		return self::PI * pow($this->radius, 2);
	}
	/**
	 * @return float
	 */
	public function getPerimeter() : float
	{
		return 2 * self::PI * $this->radius;
	}
}