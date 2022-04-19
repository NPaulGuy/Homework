/**
 * Сделать функцию по сортировке массива по убыванию.
 */
function reverseSort(a, b) {
	return (b - a);
}
let arr = [5, 2, 1, -10, 8];
arr.sort(reverseSort);
alert(arr);