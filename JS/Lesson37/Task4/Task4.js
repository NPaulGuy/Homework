/**
 * Напишите JS-код, реализующий поведение «подсказка».
 * При наведении мыши на элемент с атрибутом data-tooltip, над ним должна показываться подсказка и скрываться при переходе на другой элемент.
 * В этой задаче мы полагаем, что во всех элементах с атрибутом data-tooltip – только текст. То есть, в них нет вложенных тегов (пока).
 * Детали оформления:
 * Отступ от подсказки до элемента с data-tooltip должен быть 5px по высоте.
 * Подсказка должна быть, по возможности, посередине элемента.
 * Подсказка не должна вылезать за границы экрана, в том числе если страница частично прокручена, если нельзя показать сверху – показывать снизу элемента.
 * Текст подсказки брать из значения атрибута data-tooltip. Это может быть произвольный HTML.
 * Для решения вам понадобятся два события:
 * mouseover срабатывает, когда указатель мыши заходит на элемент.
 * mouseout срабатывает, когда указатель мыши уходит с элемента.
 * Примените делегирование событий: установите оба обработчика на элемент document, чтобы отслеживать «заход» и «уход» курсора на элементы с атрибутом data-tooltip и управлять подсказками с их же помощью.
 * После реализации поведения – люди, даже не знакомые с JavaScript смогут добавлять подсказки к элементам.
 * P.S. В один момент может быть показана только одна подсказка.
 */
let hint = document.createElement('div');
hint.className = 'tooltip';
document.addEventListener('mouseover', function(event) {
	let elem = event.target;
	if (elem.dataset.tooltip) {
		let elemCoords = elem.getBoundingClientRect();
		hint.textContent = elem.dataset.tooltip;
		elem.after(hint);
		hint.style.left = elemCoords.left + (elem.clientWidth / 2) - (hint.clientWidth / 2) + 'px';
		// Проверка расположения по ширине
		if (hint.style.left < '0px') {
			hint.style.left = 0 + 'px';
		} else if (hint.offsetLeft + hint.clientWidth > document.body.clientWidth) {
			hint.style.right = document.body.clientWidth + 'px';
		}
		// Проверка расположения по высоте
		if (elemCoords.top > hint.clientHeight) {
			hint.style.top = elemCoords.top - hint.clientHeight - 5 + 'px';
		} else {
			hint.style.top = elemCoords.bottom + 5 + 'px';
		}
		
	}
});
document.addEventListener('mouseout', function(event) {
	let elem = event.target;
	if (hint && elem.dataset.tooltip) {
		hint.remove();
	}
});