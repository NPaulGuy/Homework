/**
 * У нас есть массив строк arr. Нужно получить отсортированную копию, но оставить arr неизменённым.
 * Создайте функцию copySorted(arr), которая будет возвращать такую копию.
 */
function copySorted(arr) {
	let sortedArr = arr.slice();
	return sortedArr.sort((a,b) => a - b);
}
let arr = ["HTML", "JavaScript", "CSS"];
let sorted = copySorted(arr);
alert(sorted);
alert(arr);