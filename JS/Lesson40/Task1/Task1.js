/**
 * Напишите JavaScript код, который показывает подсказку над элементом с атрибутом data-tooltip. Значение атрибута должно становиться текстом подсказки.
 * Это похоже на задачу Поведение "подсказка", но здесь элементы с подсказками могут быть вложены друг в друга. Показываться должна подсказка на самом глубоко вложенном элементе.
 * Только одна подсказка может быть показана в любой момент времени.
 */
let currentElem = null;
let hint = null;
house.addEventListener('mouseover', function(event) {
	if (currentElem) return;
	// Находит ближайшего родственника с параметром data-tooltip.
	let target = event.target.closest('[data-tooltip]');
	if (!target) return;
	hint = document.createElement('div');
	hint.className = 'tooltip';
	hint.textContent = target.dataset.tooltip;
	target.after(hint);
	let targetCoords = target.getBoundingClientRect();
	hint.style.left = targetCoords.left + (targetCoords.width / 2) - (hint.clientWidth / 2) + 'px';
	// Проверка расположения по ширине
	if (hint.style.left < '0px') {
		hint.style.left = 0 + 'px';
	} else if (hint.offsetLeft + hint.clientWidth > document.body.clientWidth) {
		hint.style.right = document.body.clientWidth + 'px';
	}
	// Проверка расположения по высоте
	if (targetCoords.top > hint.clientHeight) {
		hint.style.top = targetCoords.top - hint.clientHeight - 5 + 'px';
	} else {
		hint.style.top = targetCoords.bottom + 5 + 'px';
	}
	currentElem = target;

});
house.addEventListener('mouseout', function(event) {
	if (!currentElem) return;
	let relatedTarget = event.relatedTarget;
	// Если быстро проводить мышкой, то может оказаться, что мы ушли за границы окна (=null)
	// Поэтому проверяем на истинность значение relatedTarget.
	// При этом, производится проверка, остались ли мы внутри элемента c tooltip.
	// Если мы ещё внутри этого элемента, то ничего не делаем.
	// Однако может быть так, что мы переходим на новый вложенный элемент с tooltip.
	// В таком случае проверка на вложенность не нужна и выполняется удаление подсказки.
	if (relatedTarget && !relatedTarget.dataset.tooltip) {
		while (relatedTarget) {
			if (relatedTarget == currentElem) return;
		
			relatedTarget = relatedTarget.parentNode;
		}
	}
	if (hint) {
		hint.remove();
		hint = null;
	}
	currentElem = null;
});