<?php
namespace Lesson13;
/**
 * [Description City]
 */
class City 
{
    private string $name;
    private string $foundation;
    private int $population;
    /**
     * @param string $name
     * @param string $foundation
     * @param int $population
     */
    public function __construct(
        string $name, 
        string $foundation, 
        int $population
    ) {
        $this->name = $name;
        $this->population = $population;
        $this->foundation = $this->foundationFilter($foundation) ?? date("Y-m-d");
    }
    /**
     * @return string
     */
    public function getName() : string 
    {
        return $this->name;
    }
    /**
     * @return string
     */
    public function getFoundation() : string 
    {
        return $this->foundation;
    }
    /**
     * @return int
     */
    public function getPopulation() : int 
    {
        return $this->population;
    }
    /**
     * @param string $fieldName
     * 
     * @return string
     */
    public function getField(string $fieldName) : string 
    {
        if (isset($this->$fieldName)) {
            return $this->$fieldName;
        } else {
            echo "Error! Entered field name doesn't exists!";
            return "";
        }
    }
    /**
     * @param string $date
     * 
     * @return string
     */
    private function foundationFilter(string $date) : string
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