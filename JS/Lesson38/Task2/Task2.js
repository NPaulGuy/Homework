/**
 * Создайте галерею изображений, в которой основное изображение изменяется при клике на уменьшенный вариант.
 * P.S. Используйте делегирование.
 */
thumbs.addEventListener('click', function(event) {
	if (event.target.closest('a')) {
		let imgLink = event.target.closest('a').getAttribute('href');
		let altLink = event.target.closest('a').getAttribute('title');
		largeImg.setAttribute('src', imgLink);
		largeImg.setAttribute('alt', altLink);
		event.preventDefault();
	}
});