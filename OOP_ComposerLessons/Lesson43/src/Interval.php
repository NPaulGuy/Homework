<?php
namespace Lesson43;
class Interval
{
	private Date $date1;
	private Date $date2;
	/**
	 * @param Date $date1
	 * @param Date $date2
	 */
	public function __construct(Date $date1, Date $date2)
	{
		$this->date1 = $date1;
		$this->date2 = $date2;
	}
	/**
	 * @return int
	 */
	public function toDays() : int
	{
		return floor($this->getDiffInSeconds() / (60 * 60 * 24));
	}
	/**
	 * @return int
	 */
	public function toMonths() : int
	{
		// Разница в годах * 12 + разница в месяцах.
		$diff = ($this->date2->getYear() - $this->date1->getYear()) * 12 
			+ ($this->date2->getMonth() - $this->date1->getMonth());
		// Если день 2-ой даты меньше, чем день 1-ой, значит, один месяц в разнице неполный. Отнимаем его.
		if ($this->date2->getDay() < $this->date1->getDay()) {
			$diff--;
		}
		return $diff;
	}
	
	/**
	 * @return int
	 */
	public function toYears() : int
	{
		$diff = $this->date2->getYear() - $this->date1->getYear();
		/**
		 * Если при разнице выясняется, что один год неполный, отнимаем его.
		 * Это проверяется сравнением месяцев, а если месяцы одинаковые - сравнением дней.
		 */
		if (
			$this->date2->getMonth() < $this->date1->getMonth() 
			or $this->date2->getMonth() == $this->date1->getMonth()
			and $this->date2->getDay() < $this->date1->getDay()
		) {
			$diff--;
		}
		return $diff;
	}
	/**
	 * @return int
	 */
	private function getDiffInSeconds() : int
	{
		return strtotime($this->date2) - strtotime($this->date1);
	}
}