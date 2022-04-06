<?php
namespace Lesson43;
/**
 * [Description Date]
 */
class Date
{
	private string $date;
	/**
	 * @param null $date
	 */
	public function __construct($date = null)
	{
		if ($date) {
			$this->date = $this->dateFilter($date);
		} else {
			$this->date = date("Y-m-d");
		}
	}
	/**
	 * @return string
	 */
	public function getDay() : string
	{
		return date("d", strtotime($this->date));
	}
	/**
	 * @param string|null $lang
	 * 
	 * @return string
	 */
	public function getMonth(string $lang = null) : string
	{
		if ($lang) {
			$ru = [
				"Январь",
				"Февраль",
				"Март",
				"Апрель",
				"Май",
				"Июнь",
				"Июль",
				"Август",
				"Сентябрь",
				"Октябрь",
				"Ноябрь",
				"Декабрь"
			];
			switch ($lang) 
			{
				case 'ru' : 
					return $ru[date("m", strtotime($this->date)) - 1];
					break;
				case 'en' :
					return date("F", strtotime($this->date));
					break;
				default : 
					return date("m", strtotime($this->date));
					break;
			}
		} else {
			return date("m", strtotime($this->date));
		}
	}
	/**
	 * @return string
	 */
	public function getYear() : string
	{
		return date("Y", strtotime($this->date));
	}
	/**
	 * @param null $lang
	 * 
	 * @return [type]
	 */
	public function getWeekDay($lang = null)
	{
		if ($lang) {
			$ru = [
				"Понедельник",
				"Вторник",
				"Среда",
				"Четверг",
				"Пятница",
				"Суббота",
				"Воскресенье"
			];
			switch ($lang) 
			{
				case 'ru' : 
					return $ru[date("N", strtotime($this->date)) - 1];
					break;
				case 'en' :
					return date("l", strtotime($this->date));
					break;
				default : 
					return date("N", strtotime($this->date));
					break;
			}
		} else {
			return date("N", strtotime($this->date));
		}
	}
	/**
	 * @param int $value
	 * 
	 * @return Date
	 */
	public function addDay(int $value) : Date
	{
		$date = date_create($this->date);
		$date = date_modify($date, "+$value day");
		$this->date = date_format($date, "Y-m-d");
		return $this;
	}
	/**
	 * @param int $value
	 * 
	 * @return Date
	 */
	public function subDay(int $value) : Date
	{
		$date = date_create($this->date);
		$date = date_modify($date, "-$value day");
		$this->date = date_format($date, "Y-m-d");
		return $this;
	}
	/**
	 * @param int $value
	 * 
	 * @return Date
	 */
	public function addMonth(int $value) : Date
	{
		$date = date_create($this->date);
		$date = date_modify($date, "+$value month");
		$this->date = date_format($date, "Y-m-d");
		return $this;
	}
	/**
	 * @param int $value
	 * 
	 * @return Date
	 */
	public function subMonth(int $value) : Date
	{
		$date = date_create($this->date);
		$date = date_modify($date, "-$value month");
		$this->date = date_format($date, "Y-m-d");
		return $this;
	}
	/**
	 * @param int $value
	 * 
	 * @return Date
	 */
	public function addYear(int $value) : Date
	{
		$date = date_create($this->date);
		$date = date_modify($date, "+$value year");
		$this->date = date_format($date, "Y-m-d");
		return $this;
	}
	/**
	 * @param int $value
	 * 
	 * @return Date
	 */
	public function subYear(int $value) : Date
	{
		$date = date_create($this->date);
		$date = date_modify($date, "-$value year");
		$this->date = date_format($date, "Y-m-d");
		return $this;
	}
	/**
	 * @param mixed $format
	 * 
	 * @return string
	 */
	public function format($format) : string
	{
		date($format, strtotime($this->date));
	}
	/**
	 * @return string
	 */
	public function __toString() : string
	{
		return $this->date;
	}
	/**
	 * @param string $date
	 * 
	 * @return string
	 */
	private function dateFilter(string $date) : string
	{
		// Регул. выражение для проверки корректности формата даты.
		$pattern = "#^([0-9]{4})-([0-9]{2})-([0-9]{2})$#";
		$parts = [];
		// Если формат даты подходит, то проверяем корректность месяца и дня
		if (preg_match($pattern, $date, $parts)) {
			// Если указан месяц больше 12-ого, то меняем его на 12-ый месяц.
			if ($parts[2] > 12) {
				$parts[2] = 12;
			}
			// Расчёт кол-ва дней в введённом месяце
			$seconds = mktime(0, 0, 0, $parts[2] + 1, 1, $parts[1]) - mktime(0, 0, 0, $parts[2], 1, $parts[1]); 
			$days = $seconds / (60 * 60 * 24);
			// Если указан день, выходящий за рамки месяца, устанавливаем крайний день.
			if ($parts[3] > $days) {
				$parts[3] = $days;
			}
			// Формируем "отфильтрованную" дату и возвращаем её.
			$filteredDate = $parts[1] . "-" . $parts[2] . "-" . $parts[3];
			return $filteredDate;
		} else {
			// Если дата некорректна, то возвращаем пустую строку.
			return "";
		}
	}
}