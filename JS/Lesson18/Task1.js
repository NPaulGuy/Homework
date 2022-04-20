/**
 * Допустим, у нас есть массив arr.
 * Создайте функцию unique(arr), которая вернёт массив уникальных, не повторяющихся значений массива arr.
 */
function unique(arr) {
	let setArr = new Set(arr);
	let newArr = [];
	setArr.forEach(
		(value) => {
			newArr.push(value);
		}
	);
	return newArr;
}
let values = ["Hare", "Krishna", "Hare", "Krishna",
  "Krishna", "Krishna", "Hare", "Hare", ":-O"
];
alert(unique(values));