<?php
/**
 * Дан массив: 
 * $arr = [
 *		['name'=>'Коля', 'age'=>30, 'salary'=>500],
 *		['name'=>'Вася', 'age'=>31, 'salary'=>600],
 *		['name'=>'Петя', 'age'=>32, 'salary'=>700],
 *	];
 * С помощью цикла сформируйте с его помощью следующий HTML код: 
 * <table>
 *	<tr>
 *		<tr>
 *			<td>Коля</td>
 *			<td>30</td>
 *			<td>500</td>
 *	</tr>
 *		<tr>
 *			<td>Вася</td>
 *			<td>31</td>
 *			<td>600</td>
 *		</tr>
 *		<tr>
 *			<td>Петя</td>
 *			<td>32</td>
 *			<td>700</td>
 *		</tr>
 *	</tr>
 * </table>
 */
$arr = [
    ['name'=>'Коля', 'age'=>30, 'salary'=>500],
    ['name'=>'Вася', 'age'=>31, 'salary'=>600],
    ['name'=>'Петя', 'age'=>32, 'salary'=>700],
];
echo "<table><tr>";
foreach ($arr as $subArr) {
    echo "<tr>";
    foreach ($subArr as $elem) {
        echo "<td>$elem</td>";
    }
    echo "</tr>";
}
echo "</tr></table>";