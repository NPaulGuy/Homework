/**
 * Выведите односвязный список из предыдущего задания Вывод односвязного списка в обратном порядке.
 * Сделайте два решения: с использованием цикла и через рекурсию.
 */
// Цикл
function reversePrint(list) {
	let arr = [];
	let current = list;
	while (current) {
		arr.push(current.value);
		current = current.next;
	}
	for (i = arr.length - 1; i >= 0; i--) {
		alert(arr[i]);
	}
}
// Рекурсия
/*function reversePrint(list) {
	if (list) {
		reversePrint(list.next);
		alert(list.value);
	} 
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
reversePrint(list);