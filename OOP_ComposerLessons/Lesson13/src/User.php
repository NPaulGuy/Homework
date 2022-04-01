<?php
namespace Lesson13;
/**
 * [Description User]
 */
class User
{
	private string $surname; // фамилия
	private string $name; // имя
	private string $patronymic; // отчество
		
	/**
	 * @param mixed $surname
	 * @param mixed $name
	 * @param mixed $patronymic
	 */
	public function __construct($surname, $name, $patronymic)
	{
		$this->surname = $surname;
		$this->name = $name;
		$this->patronymic = $patronymic;
	}
    /**
     * @return string
     */
    public function getSurname() : string 
    {
        return $this->surname;
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
    public function getPatronymic() : string 
    {
        return $this->patronymic;
    }
    /**
     * @param string $fieldName
     * 
     * @return mixed
     */
    public function getField(string $fieldName) 
    {
        if (isset($this->$fieldName)) {
            return $this->$fieldName;
        } else {
            echo "Error! Entered field name doesn't exists!";
            return null;
        }
    }
}