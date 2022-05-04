/**
 * Пусть мяч перемещается при клике на поле, туда, куда был клик
 * Требования:
 * Центр мяча должен совпадать с местом нажатия мыши (если это возможно без пересечения краёв поля);
 * CSS-анимация желательна, но не обязательна;
 * Мяч ни в коем случае не должен пересекать границы поля;
 * При прокрутке страницы ничего не должно ломаться;
 * Заметки:
 * Код должен уметь работать с различными размерами мяча и поля, не привязываться к каким-либо фиксированным значениям.
 * Используйте свойства event.clientX/event.clientY для определения координат мыши при клике.
 */
function moveBall(event) {
	let ballHalfWidth = ball.clientWidth / 2;
	let ballHalfHeight = ball.clientHeight / 2;
	// Координаты нажатия мыши с учётом прокрутки окна.
	let mouseX = event.clientX + window.scrollX;
	let mouseY = event.clientY + window.scrollY;
	// Левая граница: расстояние от левого края окна браузера + размер рамки.
	let leftEdge = field.offsetLeft + field.clientLeft;
	// Граница по Y: расстояние от верхнего края окна браузера + размер рамки.
	let topEdge = field.offsetTop + field.clientTop;
	// Правая граница: к левой границе добавляем ширину поля.
	let rightEdge = leftEdge + field.clientWidth;
	// Нижняя граница: к верхней границе добавляем высоту поля.
	let bottomEdge = topEdge + field.clientHeight;
	// Если нажатое место выведет за пределы поля, устанавливаем крайние допустимые значения
	mouseX = mouseX < leftEdge + ballHalfWidth ? leftEdge + ballHalfWidth : mouseX;
	mouseX = mouseX > rightEdge - ballHalfWidth ? rightEdge - ballHalfWidth : mouseX;
	mouseY = mouseY < topEdge + ballHalfHeight ? topEdge + ballHalfHeight : mouseY;
	mouseY = mouseY > bottomEdge - ballHalfHeight ? bottomEdge - ballHalfHeight : mouseY;
	// Помещаем мяч в "кликнутое" место
	ball.style.left = mouseX - ballHalfWidth + 'px';
	ball.style.top = mouseY - ballHalfHeight + 'px';
}
// Поскольку координаты мяча сначала не заданы, происходит баг с мгновенным перемещением мяча.
// Чтобы мяч сразу двигался плавно, установим координаты на верхний левый угол поля.
ball.style.left = field.offsetLeft + field.clientLeft + 'px';
ball.style.top = field.offsetTop + field.clientTop + 'px';
field.addEventListener('click', moveBall);