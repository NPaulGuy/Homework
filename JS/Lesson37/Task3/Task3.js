/**
 * Сделать таблицу сортируемой: при клике на элемент <th> строки таблицы должны сортироваться по соответствующему столбцу.
 * Каждый элемент <th> имеет атрибут data-type.
 * В примере первый столбец содержит числа, а второй – строки. Функция сортировки должна это учитывать, ведь числа сортируются иначе, чем строки.
 * Сортировка должна поддерживать только типы "string" и "number".
 * P.S. Таблица может быть большой, с любым числом строк и столбцов.
 */
document.addEventListener('click', function(event) {
	let elem = event.target;
	// Начинаем сортировать, если нажали на ячейку с названием столбца
	if (elem.tagName == 'TH') {
		let sortType = elem.dataset.type;
		let sortedRows = null;
		// В зависимости от типа сортировки берём данные из соответствующего столбца
		// Отрезаем от массива 1-ый элемент, т.к. это шапка с названиями столбцов.
		switch (sortType) {
			case 'number' :
				sortedRows = Array.from(grid.rows)
					.slice(1)
					.sort((rowA, rowB) => rowA.cells[0].textContent - rowB.cells[0].textContent ? 1 : -1);
				break;
			case 'string' :
				sortedRows = Array.from(grid.rows)
					.slice(1)
					.sort((rowA, rowB) => rowA.cells[1].textContent > rowB.cells[1].textContent ? 1 : -1);
				break;
		}
		if (sortedRows !== null) {
			grid.tBodies[0].append(...sortedRows);
		} else {
			alert("Error! Wrong sortType!");
		}
	}
});