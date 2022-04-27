/**
 * Напишите функцию createTree, которая создаёт вложенный список ul/li из объекта.
 * Выберите один из двух способов решения этой задачи:
 * Создать строку, а затем присвоить через container.innerHTML.
 * Создавать узлы через методы DOM.
 * P.S. Желательно, чтобы в дереве не было лишних элементов, в частности -– пустых <ul></ul> на нижнем уровне.
 */
// Способ через строки
/*function createTree(container, data) {
	let arr = Object.entries(data);
	if (arr[0] && typeof arr[0][0] == "string") {
		let name = arr[0][0];
		container.innerHTML += `<li>${name}</li>`;
		// Если следующий объект пустой, то не создаём ul, т.к. он окажется пустым.
		if (Object.keys(arr[0][1]).length) {
			container.innerHTML += `<ul></ul>`;
			let ulCollection = container.getElementsByTagName('ul');
			createTree(ulCollection[ulCollection.length - 1], arr[0][1]);
		}
	} else {
		return;
	}
	arr.shift();
	createTree(container, Object.fromEntries(arr));
}*/
// Способ через DOM-методы
function createTree(container, data) {
	let arr = Object.entries(data);
	if (arr[0] && typeof arr[0][0] == "string") {
		let name = arr[0][0];
		let li = document.createElement('li');
		li.textContent = name;
		container.append(li);
		// Если следующий объект пустой, то не создаём ul, т.к. он окажется пустым.
		if (Object.keys(arr[0][1]).length) {
			let ul = document.createElement('ul');
			container.append(ul);
			createTree(ul, arr[0][1]);
		}
	} else {
		return;
	}
	arr.shift();
	createTree(container, Object.fromEntries(arr));
}
let data = {
	"Рыбы": {
		"форель": {},
		"лосось": {}
	},
	"Деревья": {
		"Огромные": {
		"секвойя": {},
		"дуб": {}
		},
		"Цветковые": {
		"яблоня": {},
		"магнолия": {}
		}
	}
};
let container = document.getElementById('container');
createTree(container, data); // создаёт дерево в контейнере