/**
 * Дан список сообщений с кнопками для удаления [x]. Заставьте кнопки работать.
 * P.S. Используйте делегирование событий. Должен быть лишь один обработчик на элементе-контейнере для всего.
 */
container.addEventListener('click', function(event) {
	let elem = event.target;
	// Если нажатый элемент - кнопка, то выполняем удаление.
	if (elem.getAttribute('class') == 'remove-button') {
		elem.parentElement.remove();
	}
});