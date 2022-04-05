<?php
namespace Lesson29;
/**
 * [Description Cube]
 */
class Cube implements Figure3d 
{
	private int $edge;
	/**
	 * @param int $edge
	 */
	public function __construct(int $edge) 
	{
		$this->edge = $edge;
	}
	/**
	 * @return int
	 */
	public function getVolume() : int
	{
		return pow($this->edge, 3);
	}
	/**
	 * @return int
	 */
	public function getSurfaceSquare() : int
	{
		return (pow($this->edge, 2) * 6);
	}
}