<?php
/**
 * 	Создайте многомерный массив $arr. С его помощью выведите на экран слова 'joomla', 'drupal', 'зеленый', 'красный'. 
 *  $arr = [
 *	'cms'=>['joomla', 'wordpress', 'drupal'],
 *	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
 *  ];
 */
$arr = [
	'cms'=>['joomla', 'wordpress', 'drupal'],
	'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo $arr['cms'][0] . $arr['cms'][2] . $arr['colors']['green'] . $arr['colors']['red'];
