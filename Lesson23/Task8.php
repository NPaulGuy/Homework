<?php
/**
 * Модифицируйте предыдущую задачу так, чтобы получился следующий HTML код: 
 * <ul>
 *	<li><a href="1.html">ссылка 1</a></li>
 *	<li><a href="2.html">ссылка 2</a></li>
 *	<li><a href="3.html">ссылка 3</a></li>
 * </ul>
 */
$arr = [
    ['href' => '1.html', 'text' => 'ссылка 1'],
    ['href' => '2.html', 'text' => 'ссылка 2'],
    ['href' => '3.html', 'text' => 'ссылка 3'],
];
echo "<ul>";
foreach ($arr as $subArr) {
    echo "<li><a href=\"{$subArr['href']}\">{$subArr['text']}</a></li>";
}
echo "</ul>";