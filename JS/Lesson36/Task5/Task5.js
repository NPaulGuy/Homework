/**
 * Есть список сообщений.
 * При помощи JavaScript для каждого сообщения добавьте в верхний правый угол кнопку закрытия.
 * Результат должен выглядеть, как показано в условии задачи.
 */
let texts = document.querySelectorAll('.pane');
for (text of texts) {
	let span = text.querySelector('span');
	let button = document.createElement('button');
	let h = text.querySelector('h3');
	button.className = 'remove-button';
	let spanCoords = span.getBoundingClientRect();
	span.after(button);
	// 10 пикселей отняты, чтобы кнопки не были на самом краю рамки, а внутри.
	button.style.left = h.clientWidth - spanCoords.width - 10 + 'px';
	button.textContent = '[x]';
	button.onclick = function () {
		button.parentElement.parentElement.remove();
	}
}
