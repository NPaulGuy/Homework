/**
 * Создайте список, в котором элементы могут быть выделены, как в файловых менеджерах.
 * При клике на элемент списка выделяется только этот элемент (добавляется класс .selected), отменяется выделение остальных элементов.
 * Если клик сделан вместе с Ctrl (Cmd для Mac), то выделение переключается на элементе, но остальные элементы при этом не изменяются.
 * P.S. В этом задании все элементы списка содержат только текст. Без вложенных тегов.
 * P.P.S. Предотвратите стандартное для браузера выделение текста при кликах.
 */
ul.addEventListener('mousedown', function(event) {
	event.preventDefault();
	if (event.target.tagName == 'LI') {
		if (!event.ctrlKey && !event.metaKey) {
			let selectedElems = ul.getElementsByTagName('li');
			if (selectedElems) {
				for (let elem of selectedElems) {
					elem.classList.remove('selected');
				}
			}
		}
		event.target.classList.add('selected');
	}
});