/**
 * Создайте функцию positionAt(anchor, position, elem), которая позиционирует элемент elem в зависимости от значения свойства position рядом с элементом anchor.
 * Аргумент position – строка с одним из 3 значений:
 * "top" – расположить elem прямо над anchor
 * "right" – расположить elem непосредственно справа от anchor
 * "bottom" – расположить elem прямо под anchor
 * Она используется внутри функции showNote(anchor, position, html), которая уже есть в исходном коде задачи.
 * Она создаёт и показывает элемент-«заметку» с текстом html на заданной позиции position рядом с элементом anchor.
 */

/**
 * Позиционирует элемент elem относительно элемента anchor в соответствии со значением position.
 *
 * @param {Node} anchor     элемент, около которого позиционируется другой элемент
 * @param {string} position одно из: top/right/bottom
 * @param {Node} elem       элемент, который позиционируется
 *
 * Оба элемента elem и anchor должны присутствовать в документе
 */
function positionAt(anchor, position, elem) {
	let coords = anchor.getBoundingClientRect();
	let elemX;
	let elemY;
	switch (position) {
		case "top" :
			elemX = coords.left;
			elemY = coords.top - elem.clientHeight;
			break;
		case "right" : 
			elemX = coords.right;
			elemY = coords.top;
			break;
		case "bottom" : 
			elemX = coords.left;
			elemY = coords.bottom;
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

showNote(blockquote, "top", "note above");
showNote(blockquote, "right", "note at the right");
showNote(blockquote, "bottom", "note below");