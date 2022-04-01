<?php
namespace Lesson11;
/**
 * [Description Student]
 */
class Student
{
    private string $name;
    private int $course;
    private bool $graduate;
    /**
     * @param string $name
     */
    public function __construct(string $name) 
    {
        $this->name = $name;
        $this->course = 1;
        $this->graduate = false;
    }
    /**
     * @return string
     */
    public function getName() : string 
    {
        return $this->name;
    }
    /**
     * @return int|null
     */
    public function getCourse() : ?int 
    {
        // Если студент - выпускник, то сообщаем об этом пользователю.
        if ($this->graduate) {
            echo $this->name . " - выпускник!";
            return null;
        } else {
            // Если студент - не выпускник, возвращаем текущий курс студента.
            return $this->course;
        }
    }
    /**
     * @return Student
     */
    public function transferToNextCourse() : Student
    {
        // Создаём переменную, содержащую текущий курс, увеличенный на 1.
        $newCourse = $this->course + 1;
        if (!($this->isCourseCorrect($newCourse))) {
            // Если курс максимальный, проверяем, является ли студент выпускником.
            // Если нет, то делаем студента выпускником.
            if (!$this->graduate) {
                $this->graduate = true;
            }
            // Сообщаем, что студент - выпускник.
            echo $this->name . " - выпускник!";
        } else {
            // Если курс не максимальный, то заносим в course новое значение.
            $this->course = $newCourse;
        }
        return $this;
    }
    /**
     * @param int $course
     * 
     * @return bool
     */
    private function isCourseCorrect(int $course) : bool 
    {
        if (isset($course)) {
            return ($course <= 5);
        } else {
            return ($this->course <= 5);
        }
    }
}