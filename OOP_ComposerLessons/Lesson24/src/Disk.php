<?php
namespace Lesson24;
class Disk implements Figure 
{
	private float $radius;
	const PI = 3.14;
	public function __construct(float $radius)
	{
		$this->radius = $radius;
	}
	public function getRadius() : float
	{
		return $this->radius;
	}
	public function setRadius(float $radius) : Disk
	{
		$this->radius = $radius;
		return $this;
	}
	public function getSquare() : float
	{
		return self::PI * pow($this->radius, 2);
	}
	public function getPerimeter() : float
	{
		return 2 * self::PI * $this->radius;
	}
}