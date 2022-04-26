/**
 * У нас есть дерево, структурированное как вложенные списки ul/li.
 * Напишите код, который выведет каждый элемент списка <li>:
 * Какой в нём текст (без поддерева) ?
 * Какое число потомков – всех вложенных <li> (включая глубоко вложенные) ?
 */
// В цикле для каждой ветви дерева(с последующими ветвями) выводится кол-во <li>
for (let elem of document.body.querySelectorAll('li')) {
	if (elem.children.length) {
		console.log(elem.firstChild.data + ">");
		alert(elem.querySelectorAll('li').length);
	} else {
		console.log("!" + elem.firstChild.data);
	}
}
// Количество потомков цельного дерева(с вложенными <li>)
alert(document.body.querySelectorAll('li').length);