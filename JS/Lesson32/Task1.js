/**
 * Создайте функцию clear(elem), которая удаляет всё содержимое из elem.
 */
// Лучший вариант - elem.innerHTML = ""(содержимое узла делаем пустым)
function clear(elem) {
	while(elem.children[0]) {
		elem.children[0].remove();
	}
}
clear(elem);