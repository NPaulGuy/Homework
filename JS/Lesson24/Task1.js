/**
 * Напишите функцию sum, которая работает таким образом: sum(a)(b) = a+b.
 */
function sum(num) {
	let sum = num;
	return function (elem) {
		sum += elem;
		return sum;
	}
}
alert(sum(1)(2));