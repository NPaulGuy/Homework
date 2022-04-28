/**
 * Измените код решения предыдущего задания так, чтобы элемент заметки использовал свойство position:absolute вместо position:fixed.
 * Это предотвратит расхождение элементов при прокрутке страницы.
 * Используйте решение предыдущего задания для начала. Чтобы проверить решение в условиях с прокруткой, добавьте стиль элементу <body style="height: 2000px">.
 */
// Вспомогательная функция получения координат для абсолютного позиционирования
function getCoords(elem) {
	let box = elem.getBoundingClientRect();

	return {
		top: box.top + window.pageYOffset,
		right: box.right + window.pageXOffset,
		bottom: box.bottom + window.pageYOffset,
		left: box.left + window.pageXOffset
	};
}

/**
 * Позиционирует элемент elem относительно элемента anchor в соответствии со значением position.
 *
 * @param {Node} anchor     элемент, около которого позиционируется другой элемент
 * @param {string} position одно из: top/right/bottom + -out/-in
 * @param {Node} elem       элемент, который позиционируется
 *
 * Оба элемента elem и anchor должны присутствовать в документе
 */
function positionAt(anchor, position, elem) {
	// Примечание: без функции работает так же. 
	// Если раскрыть окно или включить инструменты разработчика, заметки "слетают".
	let coords = getCoords(anchor);
	let elemX;
	let elemY;
	switch (position) {
		case "top-out" :
			elemX = coords.left;
			elemY = coords.top - elem.clientHeight;
			break;
		case "right-out" : 
			elemX = coords.right;
			elemY = coords.top;
			break;
		case "bottom-out" : 
			elemX = coords.left;
			elemY = coords.bottom;
			break;
		case "top-in" :
			elemX = coords.left;
			elemY = coords.top;
			break;
		case "right-in" : 
			elemX = coords.right - elem.clientWidth;
			elemY = coords.top;
			break;
		case "bottom-in" : 
			elemX = coords.left;
			elemY = coords.bottom - elem.clientHeight;
			break;
		default : 
			alert("ERROR! WRONG POSITION");
			return false;
	}
	elem.style.left = elemX + "px";
	elem.style.top = elemY + "px";
	return true;
}

/**
 * Показывает заметку с заданным содержимым на заданной позиции
 * относительно элемента anchor.
 */
function showNote(anchor, position, html) {
	let note = document.createElement('div');
	note.className = "note";
	note.innerHTML = html;
	document.body.append(note);

	positionAt(anchor, position, note);
}

// test it
let blockquote = document.querySelector('blockquote');

showNote(blockquote, "top-out", "note above");
showNote(blockquote, "right-out", "note at the right");
showNote(blockquote, "bottom-out", "note below");
showNote(blockquote, "top-in", "note above-in");
showNote(blockquote, "right-in", "note at the right-in");
showNote(blockquote, "bottom-in", "note below-in");