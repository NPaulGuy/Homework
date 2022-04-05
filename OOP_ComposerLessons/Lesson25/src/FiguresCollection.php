<?php
namespace Lesson25;
class FiguresCollection 
{
	private array $figures = [];
	/**
	 * @return array
	 */
	public function getFiguresCollection() : array 
	{
		return $this->figures;
	}
	/**
	 * @param Figure $figure
	 * 
	 * @return FiguresCollection
	 */
	public function addFigure(Figure $figure) : FiguresCollection
	{
		$this->figures[] = $figure;
		return $this;
	}
	/**
	 * @return float
	 */
	public function getTotalSquare() : float
	{
		$sum = 0;
		foreach ($this->figures as $figure) {
			$sum += $figure->getSquare();
		}
		return $sum;
	}
	public function getTotalPerimeter() : float
	{
		$sum = 0;
		foreach ($this->figures as $figure) {
			$sum += $figure->getPerimeter();
		}
		return $sum;
	}
}