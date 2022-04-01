<?php
namespace Lesson11;
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
    public function __construct(string $name) 
    {
        $this->name = $name;
        $this->course = 1;
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
            return ($course <= 5);
        } else {
            return ($this->course <= 5);
        }
    }
}