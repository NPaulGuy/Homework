/**
 * (1)Напишите функцию random(min, max), которая генерирует случайное число с плавающей точкой от min до max (но не включая max).
 * (2)Напишите функцию randomInteger(min, max), которая генерирует случайное целое (integer) число от min до max (включительно).
 * Любое число из интервала min..max должно появляться с одинаковой вероятностью.
 */
function random(min, max) {
	// 0 -- 1 => 0 -- (max - min) => min -- max
	let randNumber = Math.random() * (max - min) + min;
	return randNumber;
}
function randomInteger(min, max) {
	// Чтобы вероятности были равные, добавляем диапазоны округления для min и max(min на 0.5 меньше, max - на 0.5 больше)
	let randNumber = Math.random() * (max - min + 1) + (min - 0.5);
	let randIntNumber = Math.round(randNumber.toFixed(2)); 
	return randIntNumber;
}
alert(random(3, 8.64));
alert(randomInteger(1, 3));