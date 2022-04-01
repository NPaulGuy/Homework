<?php
/**
 * Создайте класс Student с полями name и course(курс обучения).
 * Добавьте конструктор(поле course устанавливается в 1), геттеры-сеттеры, метод transferToNextCourse(переводит студента на следующий курс).
 * Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не будет больше 5.
 */
require __DIR__ . '/../vendor/autoload.php'; 
use \Lesson11\Student;

$student = new Student("Kirill");
echo $student->getCourse() . "<br>";
while ($student->getCourse() < 5) {
    $student->transferToNextCourse();
}
$student->transferToNextCourse();