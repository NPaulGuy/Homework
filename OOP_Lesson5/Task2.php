<?php
/**
 * Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го). 
 * В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
 * Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
 * Вынесите проверку курса в отдельный private метод isCourseCorrect 
 */
/**
 * [Description Student]
 */
class Student
{
    private string $name;
    private int $course;
    /**
     * @param string $name
     * @param int $course
     */
    public function __construct(string $name, int $course) 
    {
        
        $this->name = $name;
        $this->course = $this->isCourseCorrect($course) ? $course : 1;
       
    }
    /**
     * @return string
     */
    public function getName() : string 
    {
        return $this->name;
    }
    /**
     * @return int
     */
    public function getCourse() : int 
    {
        return $this->course;
    }
    /**
     * @return Student
     */
    public function transferToNextCourse() : Student
    {
        $newCourse = $this->course + 1;
        if ($this->isCourseCorrect($newCourse)) {
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
            return ($course > 0 && $course <= 5);
        } else {
            return ($this->course > 0 && $this->course <= 5);
        }
    }
}
$obj = new Student('john', 4);
echo $obj->transferToNextCourse()->getCourse();