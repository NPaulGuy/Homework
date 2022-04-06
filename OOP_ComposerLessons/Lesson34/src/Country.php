<?php
namespace Lesson34;
class Country 
{
	use Helper;
	private int $population;
	/**
	 * @param string $name
	 * @param int $age
	 * @param int $population
	 */
	public function __construct(
		string $name, 
		int $age, 
		int $population
	) {
		$this->name = $name;
		$this->age = $age;
		$this->population = $population;
	}
	public function getPopulation() : int
	{
		return $this->population;
	}
}