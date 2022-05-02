/**
 * Создайте дерево, которое по клику на заголовок скрывает-показывает потомков.
 * Требования:
 * Использовать только один обработчик событий (применить делегирование)
 * Клик вне текста заголовка (на пустом месте) ничего делать не должен.
 */
tree.addEventListener('click', function(event) {
	let span = event.target;
	if (
		span.tagName == 'SPAN' 
		&& span.nextElementSibling
		&& span.nextElementSibling.tagName == 'UL'
	) {
		span.nextElementSibling.hidden = !(span.nextElementSibling.hidden);
	}
});