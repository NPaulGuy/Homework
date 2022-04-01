<?php
/**
 * Дан массив: $arr = [
 *		['href'=>'1.html', 'text'=>'ссылка 1'],
 *		['href'=>'2.html', 'text'=>'ссылка 2'],
 *		['href'=>'3.html', 'text'=>'ссылка 3'],
 *	];
 *  С помощью цикла сформируйте с его помощью следующий HTML код: 
 *  <a href="1.html">ссылка 1</a>
 *  <a href="2.html">ссылка 2</a>
 *  <a href="3.html">ссылка 3</a>
 */
$arr = [
    ['href' => '1.html', 'text' => 'ссылка 1'],
    ['href' => '2.html', 'text' => 'ссылка 2'],
    ['href' => '3.html', 'text' => 'ссылка 3'],
];
foreach ($arr as $subArr) {
    echo "<a href=\"{$subArr['href']}\">{$subArr['text']}</a><br>";
}