<?php
namespace Lesson32;
/**
 * [Description Sphere]
 */
class Sphere implements iSphere
{
	private int $radius;
	/**
	 * @param int $radius
	 */
	public function __construct(int $radius)
	{
		$this->radius = $radius;
	}
	/**
	 * @return float
	 */
	public function getVolume() : float
	{
		return self::PI * pow($this->radius, 3) * (4 / 3);
	}
	/**
	 * @return float
	 */
	public function getSquare() : float
	{
		return self::PI * pow($this->radius, 2) * 4;
	}
}