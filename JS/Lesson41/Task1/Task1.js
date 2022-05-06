/**
 * Создайте слайдер. Захватите мышкой синий бегунок и двигайте его.
 * Важные детали:
 * Слайдер должен нормально работать при резком движении мыши влево или вправо за пределы полосы. При этом бегунок должен останавливаться чётко в нужном конце полосы.
 * При нажатом бегунке мышь может выходить за пределы полосы слайдера, но слайдер пусть всё равно работает (это удобно для пользователя).
 */
thumb.onmousedown = function(event) {
	let thumbCoords = thumb.getBoundingClientRect();
	let shiftX = event.clientX - thumbCoords.left;
	function moveThumbAt(pageX) {
		// Т.к. ползунок расположен относительно слайдера, то учитываем отступ слайдера слева.
		thumb.style.left = pageX - shiftX - slider.offsetLeft + 'px';
		if (thumb.getBoundingClientRect().left < slider.offsetLeft) {
			thumb.style.left = 0;
		} else if (
			thumb.getBoundingClientRect().left > 
			slider.offsetLeft + slider.clientWidth - thumb.clientWidth
		) {
			thumb.style.left = slider.clientWidth - thumb.clientWidth + 'px';
		}
	}
	function onMouseMove(event) {
		moveThumbAt(event.pageX);
	}
	document.addEventListener('mousemove', onMouseMove);
	document.onmouseup = function () {
		document.removeEventListener('mousemove', onMouseMove);
		document.onmouseup = null;
	}
};
thumb.ondragstart = function() {
	return false;
}