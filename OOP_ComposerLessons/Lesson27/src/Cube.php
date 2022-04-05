<?php
namespace Lesson27;
/**
 * [Description Cube]
 */
class Cube implements iCube 
{
	private int $edge;
	/**
	 * @param mixed $edge
	 */
	public function __construct($edge)
	{
		$this->edge = $edge;
	}
	/**
	 * @return int
	 */
	public function getEdge() : int
	{
		return $this->edge;
	}
	/**
	 * @param int $edge
	 * 
	 * @return iCube
	 */
	public function setEdge(int $edge) : iCube
	{
		$this->edge = $edge;
		return $this;
	}
	/**
	 * @return int
	 */
	public function getCapacity() : int
	{
		return pow($this->edge, 3);
	}
	/**
	 * @return int
	 */
	public function getTotalSquare() : int
	{
		// Площадь одной грани * 6 граней = Площадь пов-сти куба.
		return (pow($this->edge, 2) * 6);
	}
}