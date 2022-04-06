<?php
namespace Lesson40;
/**
 * [Description Date]
 */
class Date
{
	public int $year;
	public int $month;
	public int $day;
	/**
	 * @param int $year
	 * @param int $month
	 * @param int $day
	 */
	public function __construct(int $year, int $month, int $day)
	{
		$this->year = $year;
		$this->month = $this->monthFilter($month);
		$this->day = $this->dayFilter($this->month, $day);
	}
	/**
	 * @param string $property
	 * 
	 * @return string
	 */
	public function __get(string $property) : string
	{
		if ($property == "weekDay") {
			return date("l", mktime(
				0, 
				0, 
				0, 
				$this->month,
				$this->day,
				$this->year
			));
		} else {
			return (string) $this->$property;
		}
	}
	/**
	 * @param int $month
	 * 
	 * @return int
	 */
	private function monthFilter(int $month) : int
	{
		if ($month > 12) {
			return 12;
		} else if ($month < 1) {
			return 1;
		} else {
			return $month;
		}
	}
	/**
	 * @param int $month
	 * @param int $day
	 * 
	 * @return int
	 */
	private function dayFilter(int $month, int $day) : int
	{
		$diff = mktime(0, 0, 0, $month + 1, 1) - mktime(0, 0, 0, $month, 1);
		$daysInMonth = $diff / (60 * 60 * 24);
		if ($day > $daysInMonth) {
			return $daysInMonth;
		} else if ($day < 1) {
			return 1;
		} else {
			return $day;
		}
	}
}