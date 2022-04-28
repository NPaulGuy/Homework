/**
 * Есть дерево, организованное в виде вложенных списков ul/li.
 * Напишите код, который добавит каждому элементу списка <li> количество вложенных в него элементов. Узлы нижнего уровня, без детей – пропускайте.
 */
for (let elem of document.body.querySelectorAll('li')) {
	if (elem.children.length) {
		let length = elem.querySelectorAll('li').length;
		elem.firstChild.textContent += `[${length}]`;
	} 
}