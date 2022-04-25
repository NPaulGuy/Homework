/**
 * Напишите код, который выделит красным цветом все ячейки в таблице по диагонали.
 * Вам нужно получить из таблицы <table> все диагональные <td> и выделить их, используя код.
 */
let table = document.body.firstElementChild;
for (i = 0; i < table.rows.length; i++) {
	for (j = 0; j < table.rows[i].cells.length; j++) {
		if (i == j) {
			table.rows[i].cells[i].style.backgroundColor = 'red';
		}
	}
}