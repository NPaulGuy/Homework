/**
 * Напишите функцию min(a,b), которая возвращает меньшее из чисел a и b.
 */
function min(a, b) {
	return Number(a) <= Number(b) ? Number(a) : Number(b);
}
let a = 2, b = 3;
alert(min(a, b));