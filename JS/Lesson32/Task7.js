/**
 * Напишите код для сортировки таблицы по столбцу "name".
 * Таблица: 
Имя 	Фамилия 	Возраст
John 	Smith 	10
Pete 	Brown 	15
Ann 	Lee 	5
... 	... 	...
 * Примечание: может быть больше строк.
 */
let rows = Array.from(table.rows);
// Запишем "минимальное имя" из первой строки
let minStr = rows[1].children[0].textContent;
let columnNamesNode = rows[0];
for (let tr of rows) {
	let bufStr = tr.querySelector('td') ? tr.querySelector('td').textContent : 0;
	if (bufStr && bufStr < minStr) {
		columnNamesNode.after(tr);
		minStr = bufStr;
	}
}