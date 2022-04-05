<?php
/**
 * Сделайте интерфейс Figure3d (трехмерная фигура), который будет иметь метод getVolume (получить объем) и метод getSurfaceSquare (получить площадь поверхности).
 * Сделайте класс Cube, который будет реализовывать интерфейс Figure3d.
 * Создайте несколько объектов класса Quadrate, несколько объектов класса Rectangle и несколько объектов класса Cube. Запишите их в массив $arr в случайном порядке.
 * (1)Переберите циклом массив $arr и выведите на экран только площади объектов реализующих интерфейс iFigure.
 * (2)Переберите циклом массив $arr и выведите для плоских фигур их площади, а для объемных - площади их поверхности.
 */
require __DIR__ . '/../vendor/autoload.php';
use \Lesson29\Cube;
use \Lesson29\Rectangle;
use \Lesson29\Quadrate;
// Без iFigure и Figure3d не работает проверка instanceof.
use \Lesson29\iFigure;
use \Lesson29\Figure3d;

$classes = ['Cube', 'Rectangle', 'Quadrate'];
$arr = [];
for ($i = 0; $i < 8; $i++) {
	$num = mt_rand(0,2);
	switch ($num) 
	{
		case 0:
			$arr[] = new Cube(mt_rand(1, 25));
		case 1:
			$arr[] = new Rectangle(mt_rand(1,25), mt_rand(1,25));
		case 2:
			$arr[] = new Quadrate(mt_rand(1,25));
	}
}
var_dump($arr);
echo "<br>--------------<br>";
// (1)
foreach ($arr as $figure) {
	if ($figure instanceof iFigure) {
		echo $figure->getSquare() . "-";
	}
}
echo "<br>--------------<br>";
// (2)
foreach ($arr as $figure) {
	if ($figure instanceof iFigure) {
		echo $figure->getSquare() . "^-";
	} else if ($figure instanceof Figure3d) {
		echo $figure->getSurfaceSquare() . "!-";
	}
}