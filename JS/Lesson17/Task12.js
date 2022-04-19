/**
 * Пусть arr – массив строк.
 * Напишите функцию unique(arr), которая возвращает массив, содержащий только уникальные элементы arr.
 */
function unique(arr) {
	let newArr = [];
	arr.map(
		item => {
			if (!newArr.includes(item)) {
				newArr.push(item);
			}
		}
	);
	return newArr;
}
let strings = ["кришна", "кришна", "харе", "харе",
  "харе", "харе", "кришна", "кришна", ":-O"
];
alert(unique(strings));