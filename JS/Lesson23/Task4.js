/**
 * Допустим, у нас есть односвязный список.
 * Напишите функцию printList(list), которая выводит элементы списка по одному.
 * Сделайте два варианта решения: используя цикл и через рекурсию.
 */
// Рекурсия 
function printList(list) {
	alert(list.value);
	return list.next === null ? true : printList(list.next);
}
// Цикл
/*function printList(list) {
	do {
		alert(list.value);
		if (list.next === null) {
			break;
		}
		list = list.next;
	} while (1);
	return true;
}*/
let list = {
	value: 1,
	next: {
		value: 2,
		next: {
			value: 3,
			next: {
				value: 4,
				next: null
			}
		}
	}
};
printList(list);