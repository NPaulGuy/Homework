<?php
namespace Lesson21;
/**
 * [Description User]
 */
class User
{
	protected string $name;
	protected string $surname;
	protected string $birthday;
	protected int $age;
	/**
	 * @param string $name
	 * @param string $surname
	 * @param string $birthday
	 * @param int $age
	 */
	public function __construct(
		string $name, 
		string $surname, 
		string $birthday
	) {
		$this->name = $name;
		$this->surname = $surname;
		$this->birthday = $this->dateFilter($birthday);
		$this->age = $this->calculateAge($this->birthday);
	}
	/**
	 * @return string
	 */
	public function getName() : string
	{
		return $this->name;
	}
	/**
	 * @param string $name
	 * 
	 * @return User
	 */
	public function setName(string $name) : User
	{
		$this->name = $name;
		return $this;
	}
	/**
	 * @return string
	 */
	public function getSurname() : string
	{
		return $this->surname;
	}
	/**
	 * @param string $surname
	 * 
	 * @return User
	 */
	public function setSurname(string $surname) : User
	{
		$this->surname = $surname;
		return $this;
	}
	/**
	 * @return string
	 */
	public function getBirthday() : string
	{
		return $this->birthday;
	}
	/**
	 * @return int
	 */
	public function getAge() : int
	{
		return $this->age;
	}
	/**
	 * @param string $birthday
	 * 
	 * @return int
	 */
	private function calculateAge(string $birthday) : int
	{
		// Если дата не пустая, то выполняем вычисления.
		if (!empty($birthday)) {
			$parts = explode('-', $birthday);
			// Получаем возраст без учёта месяца и дня
			$age = date("Y") - $parts[0];
			// Если день рождения в этом году не наступил, то отнимает от years единицу, получая текущий возраст.
			if (time() < mktime(0, 0, 0, $parts[1], $parts[2])) {
				$age--;
			}
			return $age;
		} else {
			// Если дата пустая(был неправильный ввод даты), то устанавливаем возраст в 0.
			echo "Warning! Incorrect date format!<br>";
			return 0;
		}
		
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