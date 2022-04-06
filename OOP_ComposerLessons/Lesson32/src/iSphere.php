<?php
namespace Lesson32;
/**
 * [Description iSphere]
 */
interface iSphere
{
	const PI = 3.14; 
	/**
	 * @param int $radius
	 */
	public function __construct(int $radius);
	/**
	 * @return float
	 */
	public function getVolume() : float;
	/**
	 * @return float
	 */
	public function getSquare() : float;
}