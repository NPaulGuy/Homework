<?php
namespace Lesson25;
/**
 * [Description Disk]
 */
class Disk implements Figure 
{
	private float $radius;
	const PI = 3.14;
	/**
	 * @param float $radius
	 */
	public function __construct(float $radius)
	{
		$this->radius = $radius;
	}
	/**
	 * @return float
	 */
	public function getRadius() : float
	{
		return $this->radius;
	}
	/**
	 * @param float $radius
	 * 
	 * @return Disk
	 */
	public function setRadius(float $radius) : Disk
	{
		$this->radius = $radius;
		return $this;
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