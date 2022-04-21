/**
 * Напишите функцию sumTo(n), которая вычисляет сумму чисел 1 + 2 + ... + n.
 * Сделайте три варианта решения:
 * С использованием цикла.
 * Через рекурсию, т.к. sumTo(n) = n + sumTo(n-1) for n > 1.
 * С использованием формулы арифметической прогрессии.
 */
// Циклы
/*function sumTo(n) {
	let sum = 0;
	for (let i = n; i > 0; i--) {
		sum += i;
	}
	return sum;
}*/
// Рекурсия
/*function sumTo(n) {
	return n > 0 ? n + sumTo(n - 1) : 0;
}*/
// Арифметическая прогрессия
function sumTo(n) {
	return n * (n + 1) / 2;
}
let start = new Date();
alert(sumTo(100000));
alert(new Date() - start);