/**
 * Сделайте так, чтобы элементы с классом draggable можно было переносить мышкой. Как мяч в этой главе.
 * Требования к реализации:
 * Используйте делегирование событий для отслеживания начала перетаскивания: только один обработчик событий mousedown на документе.
 * Если элементы подносят к верхней/нижней границе окна – оно должно прокручиваться вверх/вниз, чтобы позволить дальнейшее перетаскивание.
 * Горизонтальная прокрутка отсутствует (чуть-чуть упрощает задачу, её просто добавить).
 * Элемент при переносе, даже при резких движениях мышкой, не должен даже частично попасть вне окна.
 */
document.onmousedown = function(event) {
	event.preventDefault();
	let dragElem = document.elementFromPoint(event.clientX, event.clientY);
	if (!dragElem.classList.contains('draggable')) return;
	let dragElemCoords = dragElem.getBoundingClientRect();
	let shiftX = event.clientX - dragElemCoords.left;
	let shiftY = event.clientY - dragElemCoords.top;
	function dragElemMove(pageX, pageY) {
		let newX = pageX - shiftX;
		let newY = pageY - shiftY;
		if (newX < 0) {
			newX = 0;
		} else if (newX > document.body.clientWidth - dragElem.offsetWidth) {
			newX = document.body.clientWidth - dragElem.offsetWidth;
		} 
		if (newY < window.scrollY) {
			if (window.scrollY > 0) {
				window.scrollTo(window.scrollX, newY);
			} else {
				newY = window.scrollY;
			}
		} else if (newY > window.scrollY + window.innerHeight - dragElem.offsetHeight) {
			if (window.scrollY + window.innerHeight < document.body.clientHeight) {
				let scrollDown = newY - (window.scrollY + window.innerHeight - dragElem.offsetHeight);
				window.scrollBy(0, scrollDown);
			} else {
				newY = window.scrollY + window.innerHeight - dragElem.offsetHeight;
			}
		}
		// Прокрутка
		if (newY + dragElem.offsetHeight > window.innerHeight) {

		}
		dragElem.style.position = 'absolute';
		dragElem.style.left = newX + 'px';
		dragElem.style.top = newY + 'px';
		
	}
	function onMouseMove(event) {
		dragElemMove(event.pageX, event.pageY);
	}
	function onMouseUp(event) {
		document.removeEventListener('mousemove', onMouseMove);
		document.removeEventListener('mouseup', onMouseUp);
	}
	document.addEventListener('mousemove', onMouseMove);
	document.addEventListener('mouseup', onMouseUp);
	dragElem.ondragstart = function() {
		return false;
	}
};