/**
 * Напишите интерфейс для создания списка.
 * Для каждого пункта:
 * Запрашивайте содержимое пункта у пользователя с помощью prompt.
 * Создавайте элемент <li> и добавляйте его к <ul>.
 * Процесс прерывается, когда пользователь нажимает Esc или вводит пустую строку.
 * Все элементы должны создаваться динамически.
 * Если пользователь вводит HTML-теги -– пусть в списке они показываются как обычный текст.
 */
 function createList() {
	let ul = document.createElement('ul');
	document.body.append(ul);
	while (true) {
		let elem = prompt("Введите новый пункт списка:", "");
		if (elem == null || elem == "") {
			break;
		}
		let li = document.createElement('li');
		li.append(elem);
		ul.append(li);
	}
}
createList();