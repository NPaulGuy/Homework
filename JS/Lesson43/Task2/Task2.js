/**
 * Создайте кнопку «наверх», чтобы помочь с прокруткой страницы.
 * Она должна работать следующим образом:
 * Пока страница не прокручена вниз хотя бы на высоту окна – кнопка невидима.
 * Когда страница прокручена вниз больше, чем на высоту окна – появляется стрелка «наверх» в левом верхнем углу. Если страница прокручивается назад, стрелка исчезает.
 * Когда нажимается стрелка, страница прокручивается вверх.
 */
window.addEventListener('scroll', function() {
	if(window.scrollY >= window.innerHeight) {
		arrowTop.hidden = false;
	} else {
		arrowTop.hidden = true;
	}
});
arrowTop.addEventListener('click', function() {
	window.scrollTo(window.scrollX, 0);
})