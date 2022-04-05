<?php
namespace Lesson27;
/**
 * [Description iCube]
 */
interface iCube 
{
	/**
	 * @param int $edge
	 */
	public function __construct(int $edge);
	/**
	 * @return int
	 */
	public function getEdge() : int;
	/**
	 * @param int $edge
	 * 
	 * @return iCube
	 */
	public function setEdge(int $edge) : iCube;
	/**
	 * @return int
	 */
	public function getCapacity() : int;
	/**
	 * @return int
	 */
	public function getTotalSquare() : int;
}