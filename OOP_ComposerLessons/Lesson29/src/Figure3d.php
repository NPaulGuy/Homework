<?php
namespace Lesson29;
/**
 * [Description Figure3d]
 */
interface Figure3d 
{
	/**
	 * @return int
	 */
	public function getVolume() : int;
	/**
	 * @return int
	 */
	public function getSurfaceSquare() : int;
}