<?php
namespace Lesson29;
/**
 * [Description Quadrate]
 */
class Quadrate implements iFigure 
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
	public function getPerimeter() : int
	{
		return $this->edge * 4;
	}
	/**
	 * @return int
	 */
	public function getSquare() : int
	{
		return pow($this->edge, 2);
	}
}