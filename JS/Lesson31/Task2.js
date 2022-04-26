/**
 * Сделайте все внешние ссылки оранжевыми, изменяя их свойство style.
 * Ссылка является внешней, если:
 * Её href содержит ://
 * Но не начинается с http://internal.com.
 */
let externalLinks = document.getElementsByTagName('a');
for (link of externalLinks) {
	if (
		link.href !== "" 
		&& link.getAttribute('href').indexOf("://") !== -1
		&& link.getAttribute('href').substring(0, 19) !== "http://internal.com"
	) {
		link.style.color = 'orange';
	}
}